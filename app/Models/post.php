<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['id', 'user_id', 'caption', 'photo'];
    protected $table = 'post';

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}
