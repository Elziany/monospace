<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class userBuyer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='user_buyers';
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];
}
