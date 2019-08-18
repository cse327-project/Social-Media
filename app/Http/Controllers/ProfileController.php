<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function get_profile($username)
    {
        return view('profile/profile');
    }
}
