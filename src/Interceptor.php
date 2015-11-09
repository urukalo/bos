<?php


namespace bos;

/**
 * Interceptor
 *
 * @author milan
 */
class Interceptor extends spaceShip{
   
    public function __construct($junior = false) {
        
        $this->callsign = (new \ReflectionClass($this))->getShortName();
        $this->strenght = 1000;
        
        parent::__construct(spaceShip::$MILITARY, $junior);
        
       
    }
}
