<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as FriendRequest;
use App\Friend;

class RequestController extends Controller
{
    public function send_request($user_id)
    {

        /**
         * find wheather request already exists
         */
        $exists = FriendRequest::where(['send_to' => $user_id, 'sender_id' => auth()->user()->id])->get();

        if ($exists->count()) {
            FriendRequest::destroy($exists[0]->id);
        } else {
            FriendRequest::create([
                'sender_id' => auth()->user()->id,
                'send_to' => $user_id
            ]);
        }

        return redirect()->back();
    }


    public function request_exists($user_id)
    {
        $exists = FriendRequest::where([
            'send_to' => $user_id,
            'sender_id' => auth()->user()->id
        ])->get();
        return $exists->count();
    }


    public function request_list()
    {
        $friends = FriendRequest::where([
            'send_to' => auth()->user()->id
        ])->get();

        return view('profile.request-list', compact('friends'));
    }


    public function accept_request($sender_id)
    {
        FriendRequest::where('sender_id', $sender_id)->delete();
        Friend::create([
            'user_id' => $sender_id,
            'friend_of' => auth()->user()->id
        ]);
        return redirect()->back();
    }

    public function decline_request($sender_id)
    {
        FriendRequest::where('sender_id', $sender_id)->delete();
        return redirect()->back();
    }

    public function unfriend($user_id, $friend_of)
    {
        Friend::where('friend_of', $friend_of)->where('user_id', $user_id)->delete();
        return redirect()->back();
    }
}
