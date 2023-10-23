<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\BootcampStack;
use App\Models\Stack;

class BootcampStackControllerTest extends TestCase
{
  
    /** @test */
    public function it_can_get_all_bootcamp_stacks()
    {
        $response = $this->getJson(route('bootcampStacks.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_bootcamp_stack()
    {
        $stack = Stack::factory()->create();

        $bootcampStackData = [
            'bootcamp_id' => 1, // Reemplaza con el ID de un bootcamp existente o adecuado
            'stack_id' => $stack->id,
        ];

        $response = $this->postJson(route('bootcampStacks.store'), $bootcampStackData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('bootcamp_stack', $bootcampStackData);
    }

    /** @test */
    public function it_can_show_a_bootcamp_stack()
    {
        $bootcampStack = BootcampStack::factory()->create();

        $response = $this->getJson(route('bootcampStacks.show', $bootcampStack->id));

        $response->assertStatus(200);
        $response->assertJson($bootcampStack->toArray());
        
    }

    /** @test */
    public function it_can_update_a_bootcamp_stack()
    {
        $bootcampStack = BootcampStack::factory()->create();

        $newData = [
            'bootcamp_id' => 2, // Reemplaza con el ID de un bootcamp existente o adecuado
            'stack_id' => $bootcampStack->stack_id, // Mantener el mismo stack_id
        ];

        $response = $this->putJson(route('bootcampStacks.update', $bootcampStack->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('bootcamp_stack', $newData);

    }

      /** @test */
      public function it_can_delete_a_bootcamp_stack()
      {
        $bootcampStack = BootcampStack::factory()->create();

        $response = $this->deleteJson(route('bootcampStacks.destroy', $bootcampStack->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('bootcamp_stack', ['id' => $bootcampStack->id]);

      }
      
}
