<?php

namespace bos;

/**
 * fleet commander
 *
 * @author milan
 */
class fleet {

    /**
     * ships in fleet
     * @var array
     */
    private $ships = array();

    /**
     * add ship to fleet
     * @param \bos\spaceShip $spaceShip
     */
    public function addShip(spaceShip $spaceShip) {
        $this->ships[] = $spaceShip;
    }

    /**
     * create attack formation
     * @return string
     */
    public function attackFormation() {
        $ships = $this->ships;
        usort($ships, array(\bos\spaceShip::class, "cmpByTypeStrenght"));

        $waves = array();

        foreach ($ships as $ship) {
            $waves[$ship->getStrenght()][] = $ship->getCallSign();
        }

        return $this->wavesToString($waves);
    }

    /**
     * create eskort formation
     * @return string
     */
    public function eskortFormation() {
        $ships = $this->ships;
        usort($ships, array(\bos\spaceShip::class, "cmpByType"));

        $milit = array();
        $civil = array();

        //separate military and civil ships
        foreach ($ships as $ship) {
            if ($ship->getType() == spaceShip::$MILITARY) {
                $milit[] = $ship->getCallSign();
            } else {
                $civil[] = $ship->getCallSign();
            }
        }

        //split military ships on two parts
        $milit = array_chunk($milit, ceil(count($milit) / 2));

        //create waves -- fast and ugly
        $waves = array();
        
        if (isset($milit[0]))
            $waves[0] = $milit[0];
        if (isset($civil) && count($civil) > 0)
            $waves[1] = $civil;
        if (isset($milit[1]))
            $waves[2] = $milit[1];

        return $this->wavesToString($waves);
    }

    /**
     * get all ships in fleet
     * @return array of spaceShip objects
     */
    public function getShips() {
        return $this->ships;
    }

    /**
     * convert multi array waves to string
     * @return string
     */
    private function wavesToString($waves) {
        $waveToString = array();
        foreach ($waves as $key => $wave) {
            $waveToString[$key] = implode(", ", $wave);
        }
        return implode("<br>", $waveToString);
    }

}
