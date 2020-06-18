<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'avatar',
        'website',
        'twitter',
        'github',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function courses()
    {
        return $this->belongsToMany(\App\Course::class);
    }

    public function getAvatarUrlAttribute()
    {
        return $this->avatar
            ? Storage::disk('author-avatars')->url($this->avatar)
            : 'https://avatars.dicebear.com/api/bottts/'. $this->name .'.svg';
    }
}
