<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'user_msg';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'service',
        'message'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
