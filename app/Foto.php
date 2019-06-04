<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
	public $primaryKey='id_foto';
    public $table='foto';
    public $timestamp = false;


    public function pessoaPerdida(){
        return $this->hasOne(Pessoa_perdida::class);
    }

}
