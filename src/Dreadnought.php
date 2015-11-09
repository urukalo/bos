<?php


namespace bos;

/**
 * Description of Dreadnought
 *
 * @author milan
 */
class Dreadnought extends spaceShip{
   
    public function __construct($junior = false) {
        $this->callsign = (new \ReflectionClass($this))->getShortName();
        $this->strenght = 800;
        
        parent::__construct(spaceShip::$MILITARY, $junior);
    }
}
