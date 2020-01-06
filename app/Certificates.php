<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'name', 'img', 'course_id' ,
    ];

}
