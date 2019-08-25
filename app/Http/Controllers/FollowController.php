<?php

namespace App\Http\Controllers;

use App\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function toggle_follow($follower_of)
    {
        $exists = Follow::where([
            'user_id' => auth()->user()->id,
            'follower_of' => $follower_of
        ])->get();

        if (!$exists->count()) {
            Follow::create([
                'user_id' => auth()->user()->id,
                'follower_of' => $follower_of
            ]);
        } else {
            Follow::destroy($exists[0]->id);
        }

        return redirect()->back();
    }
}
