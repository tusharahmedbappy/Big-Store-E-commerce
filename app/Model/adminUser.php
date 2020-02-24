<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class adminUser extends Model
{
    protected  $fillable = [
      'username' , 'email' , 'password'
    ];
}
