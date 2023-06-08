<?php

namespace App\Providers;

use App\Repositories\AssignmentRepository;
use App\Repositories\ContactRepository;
use App\Repositories\RoleRepository;
use App\Repositories\SolutionRepository;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('role-repo', RoleRepository::class);
        $this->app->singleton('user-repo', UserRepository::class);
        $this->app->singleton('solution-repo', SolutionRepository::class);
        $this->app->singleton('assignment-repo', AssignmentRepository::class);
        $this->app->singleton('contact-repo', ContactRepository::class);
    }
}
