<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class centro_acolhimento extends Model
{
    public $primaryKey='id_centro';
    public $table='centro_acolhimento';

    public function localizacao(){
        return $this->belongsTo(Localizacao::class);

    }
    public function casos(){
        return $this->hasMany('Laravel_Learn\Caso','id_centro','id_centro');
    }
}
