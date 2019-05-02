<?php

namespace Laravel_Learn\Providers;
use Laravel_Learn\Permission;
use Laravel_Learn\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'Laravel_Learn\Model' => 'Laravel_Learn\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
//        $gate->define('noticias', function (User $user, Notice $notice){
//            return $user->id == $notice->user_id;
//        });
//        $gate->define('notice-update',function (User $user, Notice $notice){
//            return $user->id == $notice->user_id;
//        });
        $permissions = Permission::with('roles')->get();
//        dd($permissions);
        foreach ($permissions as $permission) {

            $gate->define($permission->name, function (User $user) use ($permission){
                return $user->hasPermission($permission);

            });
        }
        $gate ->before(function (User $user, $ability){

            if ($user->hasAnyRoles('Admin')){

                return true;
            }

        });
    }

}
