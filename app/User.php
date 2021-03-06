<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FName' , 'LName', 'email', 'DonorNumber', '', 'EventDate','PickupTime','DonorAddress','DonorCIty', 'FoodAmount',  
        'NGOName', 'NGOAddress','email','NGOAddress', 'NGOCity', 'NGOspoc', 'NGOumber', 'psw', 'pswrepeat', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password' ,'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
}
