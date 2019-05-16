<?php

namespace Laravel_Learn;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

//use Illuminate\Database\

class Pessoa_perdida extends Model
{
    public $primaryKey = 'id_p_perdida';
    public $table = 'pessoa_perdida';
    public $timestamp = 'false';

    protected $appends = ['age'];

    /**
     * @return mixed
     */

//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//        $this->getAge =$this->data_nasc;
//    }

    public function user(){
        return $this ->belongsTo(User::class);
    }


    public function getAgeAttribute()
    {
        $age = "20";
//        $date = new Carbon($this->data_nasc);
//        $age = $date->diffInYears();
        return ''.$age;
    }

    public function dias()
    {
        $date = new Carbon($this->created_at);
        return $date->diffInDays();
    }

//    public function caso()
//    {
//        return $this->hasOne(Caso::class);
//    }

    public static function calcularIdade( $data){

        $date = new Carbon($data);
        return $date->diffInYears();

    }

    public static function calcularDias( $data){


        $date = new Carbon($data);
        if($date->diffInSeconds()<60)
            return $date->diffInSeconds().' segundos atrás';
        if($date->diffInMinutes()<60)
            return $date->diffInMinutes().' minutos atrás';
        if($date->diffInHours()<24)
            return $date->diffInHours().' horas atrás';
        if($date->diffInDays()<2)
            return $date->diffInDays().' dias ';
        

        return $date;

    }

}
