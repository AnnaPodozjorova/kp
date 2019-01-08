<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = '_order';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Bill()
    {
        return $this->hasMany('App\Bill');
    }
}
