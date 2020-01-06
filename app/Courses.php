<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'img', 'price', 'description', 'user_id', 'catwgory_id',
    ];

}
