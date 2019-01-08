<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = '_sub_category';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Subject()
    {
        return $this->hasMany('App\Subject');
    }
}
