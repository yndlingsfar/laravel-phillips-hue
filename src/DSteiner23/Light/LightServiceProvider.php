<?php
namespace DSteiner23\Providers;

use Illuminate\Support\ServiceProvider;

class LightServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('DSteiner23\Light\CommunicationInterface', 'DSteiner23\Light\HueCommunication');
        $this->app->bind('DSteiner23\Light\LightSwitchInterface', 'DSteiner23\Light\LightSwitch');
    }

}