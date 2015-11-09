<?php


namespace bos;

/**
 * Description of Leviathan
 *
 * @author milan
 */
class Leviathan extends spaceShip{
   
    public function __construct($junior = false) {
        $this->callsign = (new \ReflectionClass($this))->getShortName();
        $this->strenght = 600;
        
        parent::__construct(spaceShip::$MILITARY, $junior);
    }
}
