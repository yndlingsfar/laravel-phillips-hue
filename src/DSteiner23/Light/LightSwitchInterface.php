<?php

namespace App\Light;

/**
 * Provides basic light switch functionality
 *
 * Interface LightSwitchInterface
 * @package App\Light
 */
interface LightSwitchInterface
{
    //@todo: more comments

    /**
     * Switch a bulb on (using the default state)
     *
     * @param $id
     * @return bool
     */
    public function switchOn($id);

    /**
     * Switch a bulb off (using the default state)
     *
     * @param $id
     * @return bool
     */
    public function switchOff($id);

    /**
     * Change the state of a bulb
     *
     * @param $id
     * @param $saturation
     * @param $brightness
     * @param $hue
     * @return bool
     */
    public function switchState(
        $id,
        $saturation = State::MAX_SATURATION,
        $brightness = State::MAX_BRIGHTNESS,
        $hue
    );
}