<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public $primaryKey='id_localizacao';
    public $table='localizacao';
    public $timestamps=false;


    public function casos(){
        return $this->hasMany(Caso::class);
    }
    public function pessoaPerdida(){
        return $this->hasOne(Pessoa_perdida::class);
    }

}
