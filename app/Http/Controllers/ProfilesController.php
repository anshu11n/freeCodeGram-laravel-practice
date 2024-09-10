<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {   
        // dd(User::find($user)); 

        $user = User::findOrFail($user);

        return view('home',[
            'user' => $user,
        ]);
    }
}
