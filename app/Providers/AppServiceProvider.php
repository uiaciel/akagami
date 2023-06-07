<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Crew;
use App\Models\Currency;
use App\Models\Document;
use App\Models\Job;
use App\Models\National;
use App\Models\Port;
use App\Models\Ship;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {

            $view->with([
                'jobs' => Job::all(),
                'users' => User::all(),
                'companies' => Company::all(),
                'crews' => Crew::all(),
                'shipnames' => Ship::all(),
                'currencies' => Currency::all(),
                'ports' => Port::all(),
                'nationals' => National::all(),
                'documents' => Document::all(),
                'experiences' => Experience::all()
            ]);
        });
    }
}
