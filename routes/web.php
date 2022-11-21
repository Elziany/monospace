<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\googleController;
use App\Http\Controllers\githubController;
use App\Http\Controllers\ProviderUser;
use App\Http\Controllers\UserBuyerController;

use App\Http\Controllers\LanguageController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});






####################githhub authuntication ######################3

Route::get('/github/redirect/{user}',[githubController::class,'redirect'])->name('githubRedirect');
Route::get('/github/callback',[githubController::class,'callback'])->name('githubCallback');



#####################google registration###############

Route::get('/google/redirect/{user}',[googleController::class,'redirect'])->name('googleRedirect');
Route::get('/google/callback',[googleController::class,'callback'])->name('githubCallback');


########### user provider Routes################
Route::get('/provider/index',[ProviderUser::class,'providerPage'])->name('providerPage');




##########33 buyer Routes###############33
Route::get('/buyer/index',[UserBuyerController::class,'buyerPage'])->name('buyerPage');




################ Languages Routes#######
Route::get('/change/language/{locale}',[LanguageController::class,'changeLang'])->name('changeLang');
