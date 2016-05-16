<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LightServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Light\CommunicationInterface', 'App\Light\HueCommunication');
        $this->app->bind('App\Light\LightSwitchInterface', 'App\Light\LightSwitch');
    }

}