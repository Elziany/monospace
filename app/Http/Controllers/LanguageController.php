<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    ######## change language######
    function changeLang($locale)
    {
        session()->put('locale',$locale);
        return back();
    }
}
