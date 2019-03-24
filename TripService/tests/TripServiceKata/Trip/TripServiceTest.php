<?php

namespace Test\TripServiceKata\Trip;

use PHPUnit_Framework_TestCase;
use TripServiceKata\Trip\TripService;
use TripServiceKata\User\User;

class TripServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var TripService
     */
    private $tripService;

    protected function setUp()
    {
        $this->tripService = new TripService;
    }

    /** @test */
    public function test_getTripsByUser() {
        $user = new User("pippo");
        $this->tripService->getTripsByUser($user);
        $this->assertTrue('Cannot get user null');
    }
}
