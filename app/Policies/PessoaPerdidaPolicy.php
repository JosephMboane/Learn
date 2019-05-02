<?php

namespace Laravel_Learn\Policies;

use Laravel_Learn\Pessoa_perdida;
use Laravel_Learn\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PessoaPerdidaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function noticias(User $user, Pessoa_perdida $pessoa_perdida){

        return $user->id_usuario == $pessoa_perdida->user_id;

    }
    public  function before(){

        return $user-> name =='Malema';
    }
}
