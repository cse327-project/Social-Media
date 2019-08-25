<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getRouteKeyName()
    {
        return 'username';
    }


    protected function statuses()
    {
        return $this->hasMany(Status::class);
    }

    protected function friends()
    {
        return $this->hasMany(Friend::class, 'friend_of', 'id');
    }

    protected function followers()
    {
        return $this->hasMany(Follow::class, 'follower_of', 'id');
    }
}
