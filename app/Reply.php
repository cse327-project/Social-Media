<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $guarded = [];
}
