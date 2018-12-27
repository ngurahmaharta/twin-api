<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function jobTitles()
    {
        return $this->hasMany('App\Models\JobTitle');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }
}