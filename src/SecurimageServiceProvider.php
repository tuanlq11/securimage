<?php

namespace tuanlq11\securimage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class SecurimageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $app = $this->app;
        \Validator::extend('captcha', function($flied, $value, $param) use ($app) {
            return $app['securimage']->validator($value);
        }, 'Captcha is invalid!');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        Route::get('/securimage', array('as' => 'tuanlq11.securimage', 'uses' => 'tuanlq11\securimage\SecurImageController@getCaptcha'));

        $app->bind('securimage', function () {
            return new SecurImageAutoLoad();
        });

        $path = __DIR__ . '/config/securimage.php';
        $this->mergeConfigFrom($path, 'securimage');
        $this->publishes([$path => config_path('securimage.php')]);
    }
}