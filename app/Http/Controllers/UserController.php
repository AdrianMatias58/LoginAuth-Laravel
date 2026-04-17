<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Register(Request $req)
    {
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        Auth::login($user);
        return redirect('/');
    }

    public function LoginUser(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
        }
       return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }
    public function LogOutUser(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
