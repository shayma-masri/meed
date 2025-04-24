<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(['email'=>'required|email',

            'password'=>'required',]);

     $user =User::where('email', $request->email)-> first();


    }
}
