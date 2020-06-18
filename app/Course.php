<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author_id',
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
}
