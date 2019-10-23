<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE_NORMAL = 'customer';
    const ROLE_STAFF = 'staff';
    const ROLE_MANAGER = 'manager';
    const ROLE_COMPANY = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'u_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customers()
    {
        // return $this -> hasMany('App\Cutomer');
    }

    public function staffs()
    {
        // return $this -> hasMany('App\Staff');
    }

    public function reservations()
    {
        return $this -> hasMany('App\Reservation');
    }

    public function work_shifts()
    {
        return $this -> hasMany('App\WorkShift');
    }
}
