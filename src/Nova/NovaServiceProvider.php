<?php

namespace Nova\Nova;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Nova\Nova\Hypernova;

class NovaServiceProvider extends ServiceProvider{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('nova.hypernova', function ($app) {
            return new Hypernova();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('hypernova', function ($params) {
            return "<?php echo \Nova\Nova\Support\Facades\Hypernova::renderPlaceholder($params, $params) ?>";
        });
    }
}
