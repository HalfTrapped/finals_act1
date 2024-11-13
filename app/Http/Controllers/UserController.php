<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage(){
        $users = User::with(['profile', 'courses'])->get();
        return view('homepage', compact('users'));
    }
    public function userProfile($id){
        $user = User::with('profile')->find($id);
        return view('userprofile', compact('user'));
    }

}
