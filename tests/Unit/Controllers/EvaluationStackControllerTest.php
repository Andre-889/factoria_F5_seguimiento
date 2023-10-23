<?php

namespace Tests\Unit\Controllers;
use Database\Factories\EvaluationStackFactory;
use App\Models\Evaluation;
use Tests\TestCase;
use App\Models\EvaluationStack;
use App\Models\Stack;

class EvaluationStackControllerTest extends TestCase
{

    /** @test */
    public function it_can_get_all_evaluation_stack()
    {
        $response = $this->getJson(route('evaluationStacks.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_evaluation_stack()
    {
        $stack = Stack::factory()->create();
        $evaluation = Evaluation::factory()->create();

        $evaluationStackData = [
            'evaluation_id' => $evaluation->id,
            'level' => 1, 
            'stack_id' => $stack->id,
        ];

        $response = $this->postJson(route('evaluationStacks.store'), $evaluationStackData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('evaluation_stack', $evaluationStackData);
    }

    /** @test */
    public function it_can_show_a_evaluation_stack()
    {
        $evaluationStack = EvaluationStack::factory()->create();

        $response = $this->getJson(route('evaluationStacks.show', $evaluationStack->id));

        $response->assertStatus(200);
        $response->assertJson( $evaluationStack->toArray());
        
    }

    /** @test */
    public function it_can_update_a_evaluation_stack()
    {
        $evaluationStack = EvaluationStack::factory()->create();

        $newData = [
            'evaluation_id' => $evaluationStack->evaluation_id,
            'level' => 2, 
            'stack_id' => $evaluationStack->stack_id, 
        ];

        $response = $this->putJson(route('evaluationStacks.update', $evaluationStack->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('evaluation_stack', $newData);

    }

      /** @test */
      public function it_can_delete_a_evaluation_stack()
      {
        $evaluationStack = EvaluationStack::factory()->create();

        $response = $this->deleteJson(route('evaluationStacks.destroy', $evaluationStack->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('evaluation_stack', ['id' => $evaluationStack->id]);

      }
      
}
