<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;

class SocialController extends Controller
{
    public function authGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function CallBackGoogle(){
        $usuario_google=Socialite::driver('google')->user();
        $User = User::updateOrCreate([
            'google_id'=>$usuario_google->id
        ],[
            'name'=> $usuario_google->name,
            'email'=> $usuario_google->email,
        ]);
        Auth::login($User);
        return redirect('/');
    }

}
