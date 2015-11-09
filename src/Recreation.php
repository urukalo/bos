<?php


namespace bos;

/**
 * Description of Recreation
 *
 * @author milan
 */
class Recreation extends spaceShip{
   
    public function __construct($junior = false) {
        $this->callsign = (new \ReflectionClass($this))->getShortName();
        $this->strenght = 100;
        
        parent::__construct(spaceShip::$CIVILIAN, $junior);
    }
}
