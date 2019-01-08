<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = '_comments';
    protected $primaryKey = 'id';
    public $timestamps = false;

}
