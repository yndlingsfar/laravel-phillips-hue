<?php

namespace DSteiner23\Light;

/**
 * Class State
 * @package App\Light
 */
class State
{
    //@todo: ok so?
    const MAX_SATURATION = 255;
    
    const MAX_BRIGHTNESS = 255;
    
    
    /**
     * @var bool
     */
    private $on = true;

    /**
     * The intensity of the color
     * @var integer
     */
    private $saturation;

    /**
     * The brightness of the light
     * @var integer
     */
    private $brightness;

    /**
     * The measure of color
     * @var integer
     */
    private $hue;

    /**
     * @return boolean
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param boolean $on
     *
     * @return $this
     */
    public function setOn($on)
    {
        $this->on = $on;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaturation()
    {
        return $this->saturation;
    }

    /**
     * @param int $saturation
     *
     * @return $this
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrightness()
    {
        return $this->brightness;
    }

    /**
     * @param int $brightness
     *
     * @return $this
     */
    public function setBrightness($brightness)
    {
        $this->brightness = $brightness;
        return $this;
    }

    /**
     * @return int
     */
    public function getHue()
    {
        return $this->hue;
    }

    /**
     * @param int $hue
     *
     * @return $this
     */
    public function setHue($hue)
    {
        $this->hue = $hue;
        return $this;
    }
}