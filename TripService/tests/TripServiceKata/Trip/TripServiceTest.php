<?php

namespace Test\TripServiceKata\Trip;

use PHPUnit_Framework_TestCase;
use TripServiceKata\Trip\TripService;
use TripServiceKata\User\User;
use TripServiceKata\User\UsersServiceMock;

class TripServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var TripService
     */
    private $tripService;
    private $usersService;

    protected function setUp()
    {
        $this->usersService = new UsersServiceMock();
        $this->tripService = new TripService($this->usersService);
    }

    /** @test */
    public function test_getTripsByUser() {
        $user = new User("pippo");
        $this->tripService->getTripsByUser($user);
        $this->assertTrue('Cannot get user null');
    }
}
