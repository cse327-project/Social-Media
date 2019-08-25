<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    protected function user()
    {
        return $this->hasOne(User::class, 'id', 'sender_id');
    }
}
