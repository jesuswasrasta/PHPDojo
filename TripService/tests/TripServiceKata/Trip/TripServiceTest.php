<?php

namespace Test\TripServiceKata\Trip;

use PHPUnit\Framework\TestCase;
use TripServiceKata\Trip\TripService;

class TripServiceTest extends TestCase
{
    /**
     * @var TripService
     */
    private $tripService;

    protected function setUp(): void
    {
        $this->tripService = new TripService();
    }

    /** @test */ public function 
    it_does_something(): void
{
        $this->fail('This test has not been implemented yet.');
    }
}
