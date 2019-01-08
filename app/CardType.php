<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    protected $table = '_card_type';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Card()
    {
        return $this->hasMany('App\Card');
    }
}
