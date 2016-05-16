<?php

namespace DSteiner23\Light;

/**
 * Provides basic functionality for interaction with Phillips Hue API
 * 
 * Interface CommunicationInterface
 * @package DSteiner23\Light
 */
interface CommunicationInterface
{
    /**
     * Change the state of a bulb
     *
     * @param $id
     * @param Bulb $bulb
     * @return bool
     */
    public function putOneBulbState($id, Bulb $bulb);
}