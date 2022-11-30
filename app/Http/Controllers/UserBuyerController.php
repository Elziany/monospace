<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBuyerController extends Controller
{
    //
public function __construct()
{
    $this->middleware('auth.buyer');
}

     ########3 buyer user home page########
     function buyerPage()
     {
         return view('buyer.index');
     }

     ################ logout function############
     function logout()
     {
        auth()->guard('buyer')->logout();
        return redirect()->route('home');
     }

     ########### buyer profile page #######3
     function buyerProfile()
     {
        return view('buyer.profile');
     }
}
