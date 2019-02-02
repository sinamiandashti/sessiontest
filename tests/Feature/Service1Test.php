<?php

namespace Tests\Feature;

use App\Service\Service1;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Service1Test extends TestCase
{



    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $service = app(Service1::class);

        $session = session()->getId();
        $this->assertInstanceOf(Service1::class,$service);

        $this->assertEquals($session,$service->getSessionId());
        $sinaSessionData = session('sina');
        $this->assertEquals($sinaSessionData,$service->returnSinaSessionData());
    }
}
