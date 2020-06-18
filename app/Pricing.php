<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'cadence',
        'course_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
    ];


    public function course()
    {
        return $this->belongsTo(\App\Course::class);
    }

    public function benefits()
    {
        return $this->hasMany(\App\Benefit::class);
    }
}
