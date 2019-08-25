<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $guarded = [];

    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
