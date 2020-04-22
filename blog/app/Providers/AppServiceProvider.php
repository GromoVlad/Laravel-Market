<?php

namespace App\Providers;

use App\Model\Product;
use App\Observers\ProductObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
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
        Blade::directive('routeactive', function ($route) {
            return "<?php echo Route::CurrentRouteNamed($route) ? 'class=\"active\"' : '' ?>";
        });

        Blade::if('isAdmin', function () {
            return Auth::check() && Auth::user()->isAdmin();
        });

        Product::observe(ProductObserver::class);
    }
}
