<?php

namespace DSteiner23\Light;

class LightSwitch implements LightSwitchInterface
{
    /**
     * @var CommunicationInterface
     */
    private $communication;

    /**
     * LightSwitch constructor.
     * @param CommunicationInterface $communication
     */
    public function __construct(CommunicationInterface $communication)
    {
        $this->communication = $communication;
    }

    public function switchOn($id)
    {
        // TODO: Implement switchOn() method.
    }

    public function switchOff($id)
    {
        // TODO: Implement switchOff() method.
    }

    public function switchState(
        $id,
        $saturation = State::MAX_SATURATION,
        $brightness = State::MAX_BRIGHTNESS,
        $hue
    ) {

        //@todo: Factory
        $bulb = new Bulb();
        $bulb->setType('ahahaa');
        $bulb->setName('test');

        $state = new State();
        $state->setOn(true)
            ->setHue($hue)
            ->setBrightness($brightness)
            ->setSaturation($saturation);

        $bulb->setState($state);
        
        return $this->communication->putOneBulbState($id, $bulb);
    }
    
}