<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::tokensCan([
            "admin" => "Admin scope",
            "sub_admin" => "Sub Admin",
            "sale_staff" => "Sale staff",
            "service_staff" => "Service Staff "
        ]);
        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }
        //

    }
}
