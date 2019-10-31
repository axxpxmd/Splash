<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['name', 'username', 'email', 'password', 'photo', 'twitter', 'instagram', 'bio'];
    protected $table = 'users';
}
