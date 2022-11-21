<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderUser extends Controller
{
    ########3 provider user home page########
    function providerPage()
    {
        return view('providerView.index');
    }
}
