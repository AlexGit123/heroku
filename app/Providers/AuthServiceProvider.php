<?php

namespace App\Providers;

use App\Models\Fooey;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Checks if user is admin or user
        Gate::define('is_admin', function($user){
            return $user->admin  == true;
        });

        Gate::define('is_user', function(User $user){
            return $user->admin == false;
        });

        //Only admin is able to delete a post
        Gate::define('delete-fooey', function (User $user){
            return ($user->admin == true);
        });

        //defines which user has admin access
        Gate::define('admin-access', function (User $user){
            return ($user->admin == 1);
        });

        //Authorized delete only for admin
        Gate::define('destroy', function (User $user){
            return ($user->admin == true);
        });

        //Only an admin can access the admin panel
//        Gate::define('edit-own-fooey', function (User $user){
//            return (($user->is($user)));
//        });
    }
}
