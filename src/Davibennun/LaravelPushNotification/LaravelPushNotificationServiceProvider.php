<?php namespace Davibennun\LaravelPushNotification;

use Illuminate\Support\ServiceProvider,
    Davibennun\LaravelPushNotification\PushNotification;

class LaravelPushNotificationServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->register('davibennun/laravel-push-notification');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['pushNotification'] = $this->app->singleton(PushNotification::class, function($app)
        {
            return new PushNotification();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}