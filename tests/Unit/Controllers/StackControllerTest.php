<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\StackController;
use App\Models\Skill;
use App\Models\Stack;


class StackControllerTest extends TestCase
{
    

    /** @test */
    public function it_can_get_all_stacks()
    {
        $stacks = Stack::factory()->create();

        $response = $this->getJson(route('stacks.index'));

        $response->assertStatus(200);
        //$response->assertJson($skills->toArray());
    }

    /** @test */
    public function it_can_create_a_stack()
    {
        $skill = Skill::factory()->create();

        $stackData = [
            'name' => 'Test Stack',
            'skill_id' => $skill->id,
        ];

        $response = $this->postJson(route('stacks.store'), $stackData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('stacks', $stackData);
    }

    /** @test */
    public function it_can_show_a_stack()
    {
        $stack = Stack::factory()->create();

        $response = $this->getJson(route('stacks.show', $stack->id));

        $response->assertStatus(200);
        //$response->assertJson($skill->toArray());
    }

    /** @test */
    public function it_can_update_a_stack()
    {
        $stack = Stack::factory()->create();

        $newData = [
            'name' => 'Updated Stack',
            'skill_id' => $stack->skill_id, // Mantener la misma categoría
        ];

        $response = $this->putJson(route('stacks.update', $stack->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stacks', $newData);
    }

    /** @test */
    public function it_can_delete_a_stack()
    {
        $stack = Stack::factory()->create();

        $response = $this->deleteJson(route('stacks.destroy', $stack->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('stacks', ['id' => $stack->id]);
    }
}
