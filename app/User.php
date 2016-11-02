<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $fillable = [
        'username','password','photo','privilege','name'
    ];

    
    protected $hidden = [
        'remember_token','password'
    ];

}
