<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $fillable = [
        'message',
        'user',
    ];
    public function getMessageAttribute($value)
    {
        return '"' . $value . '"';
    }
}
