<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{   

    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;
    use Notifiable;

    public function Card()
    {
        return $this->hasMany('App\Card');
    }

    public function Bill()
    {
        return $this->hasMany('App\Bill');
    }

    public function Comments()
    {
        return $this->hasMany('App\Comments');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
