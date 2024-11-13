<?php

namespace App\Http\Controllers;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $profiles = Profile::with('user')->get();
        return view('profiles.index', compact('profiles'));
    }
}
