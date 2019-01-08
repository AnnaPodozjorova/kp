<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Cart()
    {
        return $this->hasMany('App\Cart');
    }

    public function Comments()
    {
        return $this->hasMany('App\Comments');
    }
}
