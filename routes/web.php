<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\googleController;
use App\Http\Controllers\githubController;
use App\Http\Controllers\ProviderUser;
use App\Http\Controllers\UserBuyerController;

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;




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
############ prevent back history#########
Route::group(['middleware'=>'prevent.back'],function(){

Route::get('/', function () {

    return view('home');
})->name('home');







####################githhub authuntication ######################3

Route::get('/github/redirect/{user}',[githubController::class,'redirect'])->name('githubRedirect');
Route::get('/github/callback',[githubController::class,'callback'])->name('githubCallback');



#####################google registration###############

Route::get('/google/redirect/{user}',[googleController::class,'redirect'])->name('googleRedirect');
Route::get('/google/callback',[googleController::class,'callback'])->name('githubCallback');


########### user provider Routes################
Route::get('/provider/index',[ProviderUser::class,'providerPage'])->name('providerPage');
Route::get('/provider/logout',[ProviderUser::class,'logout'])->name('providerLogout');
Route::get('/provider/profile',[ProviderUser::class,'providerProfile'])->name('providerProfile');




##########33 buyer Routes###############33
Route::get('/buyer/index',[UserBuyerController::class,'buyerPage'])->name('buyerPage');
Route::get('/buyer/logout',[UserBuyerController::class,'logout'])->name('buyerLogout');
Route::get('/buyer/profile',[UserBuyerController::class,'buyerProfile'])->name('buyerProfile');




################ Languages Routes#######
Route::get('/change/language/{locale}',[LanguageController::class,'changeLang'])->name('changeLang');


########### Profile Routes ########
Route::post('/create/profile/buyer',[ProfileController::class,'createBuyerProfile'])->name('createBuyerProfile');
Route::post('/create/profile/provider',[ProfileController::class,'createProviderProfile'])->name('createProviderProfile');
Route::get('/other/profile/{id}',[ProfileController::class,'otherProfile'])->name('otherProfile');


});
