<?php

use Tests\TestCase;
use App\Models\BootcampStack;
use App\Models\Stack;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BootcampStackControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /** @test */
    public function it_can_get_all_bootcamp_stacks()
    {
        $response = $this->getJson(route('bootcampStacks.index'));

        $response->assertStatus(200);
    }
}
