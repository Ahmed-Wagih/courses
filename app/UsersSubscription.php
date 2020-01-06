<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersSubscription extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' , 'course_id',
    ];

}
