<?php 

namespace Yaro\Cropp;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/cropp.php' => config_path('cropp.php'),
        ]);
    } // end boot

    public function register()
    {
        $this->app->register('Intervention\Image\ImageServiceProvider');
        
        config([
            'config/cropp.php',
        ]);
    } // end register
    
}
