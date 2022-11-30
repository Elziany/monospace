<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Provider extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='provider';
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    function profile()
    {
        return $this->hasOne(Profile::class,'user_id')->where('role',"provider");

    }
}
