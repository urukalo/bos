<?php

namespace bos;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-09 at 01:05:40.
 */
class fleetTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var fleet
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new fleet;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

        // $this->object = NULL;
    }

    /**
     * @covers bos\fleet::addShip
     * @todo   Implement testAddShip().
     */
    public function testAddShip() {
        \bos\spaceShip::resetFleetNUM();
        $this->object->addShip(new \bos\Interceptor());

        $this->assertCount(1, $this->object->getShips());
    }

    /**
     * @covers bos\fleet::attackFormation
     * @todo   Implement testAttackFormation().
     */
    public function testAttackFormation() {
        \bos\spaceShip::resetFleetNUM();
        $this->object->addShip(new \bos\Interceptor());

        $this->assertSame("Interceptor 1", $this->object->attackFormation());
    }

    /**
     * @covers bos\fleet::eskortFormation
     * @todo   Implement testEskortFormation().
     */
    public function testEskortFormation() {
        \bos\spaceShip::resetFleetNUM();
        $this->object->addShip(new \bos\Interceptor());

        $this->assertSame("Interceptor 1", $this->object->eskortFormation());
    }

}
