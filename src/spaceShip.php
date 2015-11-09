<?php

namespace bos;

/**
 * spaceShip
 *
 * @author milan
 */
abstract class spaceShip {

    /**
     * type of ship
     * @var int 
     */
    protected $type;

    /**
     * callsign of ship
     * @var string
     */
    protected $callsign;

    /**
     * strenght of ship
     * @var int
     */
    protected $strenght = 0;

    /**
     * unic num in fleet
     * @var int
     */
    private static $fleetNUM = 0;

    /**
     * Military id
     * @var int
     */
    public static $MILITARY = 1;

    /**
     * Civilian id
     * @var int
     */
    public static $CIVILIAN = 2;

    public function __construct($type, $junior = false) {
        $this->type = $type;

        self::$fleetNUM = self::$fleetNUM + 1;
        $this->callsign = $this->callsign . " " . self::$fleetNUM;
        
        if ($junior) {
            $this->callsign .= " Junior";
        }
    }
    
    public static function resetFleetNUM(){
        self::$fleetNUM = 0;
    }

    /**
     * get callsign
     * @return string
     */
    public function getCallSign() {
        return $this->callsign;
    }

    /**
     * get strenght
     * @return int
     */
    public function getStrenght() {
        return $this->strenght;
    }

    /**
     * get type
     * @return int
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Compare ships by type and strenght
     * @param \bos\spaceShip $a
     * @param \bos\spaceShip $b
     * @return type
     */
    public static function cmpByTypeStrenght(spaceShip $a, spaceShip $b) {
        if ($a->getType() != $b->getType()) {
            return ($a->getType() < $b->getType()) ? -1 : 1;
        }
        return ($a->getStrenght() > $b->getStrenght()) ? -1 : ($a->getStrenght() == $b->getStrenght()) ? 0 : 1;
    }

    /**
     * Compare ships by type
     * @param \bos\spaceShip $a
     * @param \bos\spaceShip $b
     * @return type
     */
    public static function cmpByType(spaceShip $a, spaceShip $b) {
        if ($a->getType() != $b->getType()) {
            return ($a->getType() < $b->getType()) ? -1 : 1;
        }
        return 0;
    }

}
