<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
        'avatar', 'provider_id', 'provider',
        'access_token'
    ];

//You can also use below statement

    protected $guarded = ['*'];
}
