<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class familiar extends Model
{
    public $primaryKey='id_familiar';
    public $table='familiar';
    public $timestamp = false;
}
