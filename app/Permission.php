<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function permissions(){
        return $this ->belongsToMany(Role::class);
    }
}
