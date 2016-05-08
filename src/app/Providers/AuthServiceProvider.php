<?php namespace Ognestraz\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/../Http/routes.php';
        }
        
        $pathViews = __DIR__.'/../../resources/views';
        $pathViewsLayouts = __DIR__.'/../../resources/layouts';
        $packageName = 'auth';
        
        $pathAlias = base_path('resources/views/vendor/' . $packageName);
        $this->loadViewsFrom($pathAlias, $packageName);
        
        $pathPublicCss = __DIR__.'/../../public/css/';
        $pathUnitTest = __DIR__.'/../../tests';
        
        $this->publishes([
            $pathViews => $pathAlias,
            $pathViewsLayouts => base_path('resources/views/layouts'),
            $pathPublicCss => base_path('public/css/'),
            $pathUnitTest => base_path('tests/vendor')
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
