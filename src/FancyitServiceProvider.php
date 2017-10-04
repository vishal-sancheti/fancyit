<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 04/10/17
 * Time: 4:26 PM
 */

namespace V1shky\Fancyit;


use Illuminate\Support\ServiceProvider;

class FancyitServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([
            __DIR__.'/../config/fancyit.php' => config_path('fancyit.php'),
        ]);
    }
    public function register() {
        $this->mergeConfigFrom( __DIR__.'/../config/fancyit.php', 'fancyit');
        $this->app->singleton('fancyit', function($app) {
            $config = $app->make('config');
            $pattern = $config->get('fancyit.pattern');
            return new FancyitService($pattern);
        });
    }
    public function provides() {
        return ['fancyit'];
    }

}