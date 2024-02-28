<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = 'homepage';

    public const CUSTOMER_DASHBOARD = 'customer.dashboard.index';

    public const CUSTOMER_LOGIN = 'customer.login';

    public const ADMIN_DASHBOARD = 'admin.dashboard.index';
    
    public const ADMIN_LOGIN = 'admin.login';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for(
            'api', function (Request $request) {
                return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            }
        );

        $this->routes(
            function () {
                Route::middleware('api')
                    ->prefix('api')
                    ->group(base_path('routes/api.php'));

                Route::middleware('web')
                ->group(base_path('routes/web.php'));

                Route::middleware('customer')
                ->group(base_path('routes/customer.php'));

                Route::middleware('admin')
                ->group(base_path('routes/admin.php'));
            }
        );
    }
}
