<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //

    Public function handleGoogleRedirect ()
    {
        return Socialite::driver('google')->redirect();
    }

    Public function handleGoogleCallback ()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        //Return after login
        return redirect('/');
    }

    Public function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if(!$user)
        {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
