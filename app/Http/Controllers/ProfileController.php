<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function get_profile(User $username)
    {
        $user = $username;
        return view('profile/profile', compact('user'));
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

        $user->update($request->all());


        // if ($request->has('setting_update')) {

        //     $request->validate([
        //         'name'     => ['required', 'string', 'max:255'],
        //         'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
        //         'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id]
        //     ]);

        //     $user->update($request->all());
        // }
        // if ($request->has('password_update')) {

        //     $request->validate([
        //         'password' => ['required', 'string', 'min:8', 'confirmed']
        //     ]);

        //     $user->update([
        //         'password' => bcrypt($request->password)
        //     ]);
        // }
        return redirect()->back();
    }
}
