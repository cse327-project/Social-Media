<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Request as FriendRequest;

class ProfileController extends Controller
{
    public function get_profile(User $username)
    {
        $user = $username;
        $has_request = false;
        if (\Auth::check()) {
            $request_this_user = FriendRequest::where(['send_to' => $user->id, 'sender_id' => auth()->user()->id])->get();
            $has_request = $request_this_user->count();
        }

        return view('profile/profile', compact('user', 'has_request'));
    }


    public function settings_page()
    {
        $user = auth()->user();
        return view('profile/settings', compact('user'));
    }


    public function update_settings(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id]
        ]);

        $new_profile_data = [
            "name" => $request->name,
            "email" => $request->email,
            "username" => $request->username,
            "bio" => $request->bio,
            "gender" => $request->gender
        ];


        if ($request->profile_photo) {
            $image = $request->profile_photo->store('/public/profile-photos');
            $user->update(['profile_photo' => $image]);
            $new_profile_data['profile_photo'] = $image;
        }

        if ($request->password) {
            $new_profile_data['password'] = bcrypt($request->password);
        }

        $user->update($new_profile_data);

        return redirect()->back();
    }
}
