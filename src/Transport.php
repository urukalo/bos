<?php


namespace bos;

/**
 * Description of Transport
 *
 * @author milan
 */
class Transport extends spaceShip{
   
    public function __construct($junior = false) {
        $this->callsign = (new \ReflectionClass($this))->getShortName();
        $this->strenght = 200;
        
        parent::__construct(spaceShip::$CIVILIAN, $junior);
    }
}
