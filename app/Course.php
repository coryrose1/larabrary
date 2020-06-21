<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'image',
        'summary',
        'description',
        'website',
        'published_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'published_at',
    ];


    public function authors()
    {
        return $this->belongsToMany(\App\Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Category::class);
    }

    public function pricings()
    {
        return $this->hasMany(\App\Pricing::class);
    }

    public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::disk('course-avatars')->url($this->image)
            : 'https://avatars.dicebear.com/api/bottts/'. Request::ip() .'.svg';
    }
}
