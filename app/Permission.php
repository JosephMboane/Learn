<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;
use Laravel_Learn\Role;

class Permission extends Model
{
    public function roles(){
        return $this ->belongsToMany(Role::class);
    }
}
