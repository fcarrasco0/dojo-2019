<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes;

class Samurai extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [];
	
    public function insereSamurai($request){

    	$this->nome = $request->nome;
    	$this->idade = $request->idade;
    	$this->nome_dojo = $request->nome_dojo;
    	$this->posto = $request->posto;
    	$this->arma = $request->arma;
    	$this->missoes = $request->missoes;

    	$this->save();

    }

    public function atualizaSamurai($request){

    }


}
