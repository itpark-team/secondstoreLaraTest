<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function signin()
    {
        return view('users.signin');
    }

    public function signinCheck(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = User::where(
            [
                ['login', '=', $login],
                ['password', '=', $password],
            ]
        )->first();


        if ($user == null) {
            return "error";
        } else {
            Session::put('user', $user);
            return redirect("/productsByCategory/1");
        }
    }

    public function privateZone()
    {
        return "privateZone";
    }

    public function logout()
    {
        Session::forget('user');
        return redirect("/productsByCategory/1");
    }
}
