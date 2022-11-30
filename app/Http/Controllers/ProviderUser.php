<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderUser extends Controller
{

    public function __construct()
{
    $this->middleware('auth.provider');
}
    ########3 provider user home page########
    function providerPage()
    {
        return view('providerView.index');
    }

    ################ logout function############
    function logout()
     {
        auth()->guard('Provider')->logout();
        return redirect()->route('home');
     }

     ################333 useer provider Profile#######
     function providerProfile()
     {
        return view('providerView.profile');
     }
}
