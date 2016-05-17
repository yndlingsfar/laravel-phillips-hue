<?php

namespace Dsteiner23\LightSwitch;

use Doctrine\Common\Annotations\AnnotationRegistry;
use DSteiner23\Light\Bridge;
use DSteiner23\Light\CommunicationInterface;
use DSteiner23\Light\HueCommunication;
use DSteiner23\Light\LightSwitch;
use DSteiner23\Light\LightSwitchInterface;
use Illuminate\Support\ServiceProvider;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Class LightSwitchServiceProvider
 * @package Dsteiner23\LightSwitch
 */
class LightSwitchServiceProvider extends ServiceProvider
{
    public function register()
    {
        //Doctrine Annotation Reader registration
        AnnotationRegistry::registerLoader('class_exists');

        $this->app->singleton(Serializer::class, function ($app) {
            return SerializerBuilder::create()->build();
        });

        // @todo: read from configuration
        $this->app->bind(Bridge::class, function ($app) {
            return new Bridge(
                $app['config']->get('phillipsHue.ip'),
                $app['config']->get('phillipsHue.username')
            );
        });

        // Interface binding
        $this->app->bind(LightSwitchInterface::class, LightSwitch::class);
        $this->app->bind(CommunicationInterface::class, HueCommunication::class);
    }

    public function boot()
    {
        $configPath = __DIR__ . '/../config/phillipsHue.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path('phillipsHue.php');
    }
}