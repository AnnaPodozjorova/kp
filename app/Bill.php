<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Cart()
    {
        return $this->hasMany('App\Cart');
    }




}
