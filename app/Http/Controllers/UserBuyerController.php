<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBuyerController extends Controller
{
    //
     ########3 buyer user home page########
     function buyerPage()
     {
         return view('buyer.index');
     }
}
