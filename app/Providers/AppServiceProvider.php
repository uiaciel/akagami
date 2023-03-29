<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Crew;
use App\Models\Currency;
use App\Models\Job;
use App\Models\National;
use App\Models\Port;
use App\Models\Ship;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {

            $view->with([
                'jobs' => Job::all(),
                'users' => User::all(),
                'companies' => Company::all(),
                'crews' => Crew::all(),
                'shipnames' => Ship::all(),
                'currencies' => Currency::all(),
                'ports' => Port::all(),
                'nationals' => National::all()
            ]);
        });
    }
}
