<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
