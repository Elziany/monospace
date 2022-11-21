<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\userBuyer;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class googleController extends Controller
{
    ############ redirect to google##########
    function redirect($user)
    {
        return Socialite::driver('google')->with(['state'=>$user])->redirect();

    }

    ########call back function ########
    function callback()
    {

        #########provider user registeration########################3
        $user=request()->input('state');
        if($user==='provider'){
        $Provider_google=Socialite::driver('google')->stateless()->user();
        $Provider=Provider::where('email',$Provider_google->email)->first();

        if($Provider===null)
        {
       $Provider= Provider::create([
        'name'=>$Provider_google->name,
        'email'=>$Provider_google->email,
        'avatar'=>$Provider_google->avatar

       ]);

   Auth::guard('Provider')->login($Provider);

   return redirect()->route('providerPage');

        }
        else{
            Auth::guard('Provider')->login($Provider);

            return redirect()->route('providerPage');
        }
    }


    ##################3buyer user registration############33

    elseif($user==='buyer')
    {
        $userBuyer_google=Socialite::driver('google')->stateless()->user();
        $userBuyer=userBuyer::where('email',$userBuyer_google->email)->first();

        if($userBuyer===null)
        {
       $userBuyer= userBuyer::create([
        'name'=>$userBuyer_google->name,
        'email'=>$userBuyer_google->email,
        'avatar'=>$userBuyer_google->avatar

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

