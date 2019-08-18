<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function status()
    {
        return $this->belongsTo(Status::class);
    }

    protected function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
