<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes;

class Samurai extends Model
{
    use SoftDeletes;
	protected $dates = [‘deleted_at’];


    public function insereSamurai($request){

    }

    public function atualizaSamurai($request){

    }


}
