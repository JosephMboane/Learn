<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions(){
        return $this ->belongsToMany(Permission::class);
    }
}
