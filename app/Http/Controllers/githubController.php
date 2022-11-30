<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\userBuyer;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class githubController extends Controller
{
    ############ redirect to github##########
    function redirect($user)
    {
        return Socialite::driver('github')->with(['state'=>$user])->redirect();

    }

    ########call back function ########
    function callback()
    {

        #########provider user registeration########################3
        $user=request()->input('state');
        if($user==='provider'){
        $Provider_github=Socialite::driver('github')->stateless()->user();
        $Provider=Provider::where('email',$Provider_github->email)->first();

        if($Provider===null)
        {
       $Provider= Provider::create([
        'name'=>$Provider_github->name,
        'email'=>$Provider_github->email,
        'avatar'=>$Provider_github->avatar

       ]);

   Auth::guard('Provider')->login($Provider);

   return redirect()->route('providerPage');

        }
        else{
            Auth::guard('Provider')->login($Provider);

            return redirect()->route('providerPage');
        }
    }


    ##################buyer user registration############33

    elseif($user==='buyer')
    {
        $userBuyer_github=Socialite::driver('github')->stateless()->user();
        $userBuyer=userBuyer::where('email',$userBuyer_github->email)->first();

        if($userBuyer===null)
        {
       $userBuyer= userBuyer::create([
        'name'=>$userBuyer_github->name,
        'email'=>$userBuyer_github->email,
        'avatar'=>$userBuyer_github->avatar

       ]);

   Auth::guard('buyer')->login($userBuyer);

   return redirect()->route('buyerPage');

        }
        else{
            Auth::guard('buyer')->login($userBuyer);
            return redirect()->route('buyerPage');
        }
    }
    }

}

