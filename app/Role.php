<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;
use Laravel_Learn\Permission;

class Role extends Model
{
    public function permissions(){
        return $this ->belongsToMany(Permission::class);
    }
}
