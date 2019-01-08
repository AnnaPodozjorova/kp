<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = '_category';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function SubCategory()
    {
        return $this->hasMany('App\SubCategory');
    }
}
