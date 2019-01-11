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

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }

    
    public function scopeMightAlsoLike($query){
        return $query->inRandomOrder()->take(3);
    }
}
