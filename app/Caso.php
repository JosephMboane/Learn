<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public $primaryKey='id_caso';
    public $table='caso';
    public $timestamp = 'false';

    public function guardar_caso($id){
        $caso = new Caso();
        $caso->id_pessoa_perdida = $id;
        $caso->id_pessoa_ajuda = 1;
        $caso->id_localizacao = 2;
        $caso->save();
        return $caso->id_caso;
    }
//    protected $with =['pessoa_perdida'];


    public function pessoa_perdida(){
        return $this->belongsTo(Pessoa_perdida::class);
    }
    public function pessoa_ajuda(){
        return $this->belongsTo(Pessoa_ajuda::class);

    }
    public function localizacao(){
        return $this->belongsTo(Localizacao::class);

    }

    public function centroAcolhimento(){
        return $this->belongsToMany(centro_acolhimento::class);
    }


}
