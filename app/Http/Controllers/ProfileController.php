<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;
use App\Models\Provider;

class ProfileController extends Controller
{
    //

    public function __construct()
{
    $this->middleware('auth.guard') ;
}

######## buyer creation profile method##########
function createBuyerProfile(ProfileRequest $req)
{


    $profile=Profile::create([
'role'=>'buyer',
'first_name'=>$req->firstname,
'second_name'=>$req->secondname,
'specialization'=>$req->specialization,
'job_title'=>$req->job_title,
'brief'=>$req->brief,
'type'=>json_encode($req->type,true),
'skills'=>$req->skills,
'user_id'=>auth()->guard('buyer')->user()->id
    ]);

    return redirect()->back();
}

############ create user Provider controller #############
function createProviderProfile(ProfileRequest $req)
{


    $profile=Profile::create([
'role'=>'Provider',
'first_name'=>$req->firstname,
'second_name'=>$req->secondname,
'specialization'=>$req->specialization,
'job_title'=>$req->job_title,
'brief'=>$req->brief,
'type'=>json_encode($req->type,true),
'skills'=>$req->skills,
'user_id'=>auth()->guard('Provider')->user()->id
    ]);

    return redirect()->back();
}


    ########### show others your profile########
    function otherProfile($id)
    {
$provider=Provider::find($id);
if($provider->profile ===null)
{
    return redirect()->back()->with('msg','this profile not exist');
}
return view('othersProfile',compact('provider'));
    }
}
