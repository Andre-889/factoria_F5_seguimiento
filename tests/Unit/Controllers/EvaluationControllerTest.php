<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\EvaluationStackController;
use App\Models\Evaluation;

class EvaluationControllerTest extends TestCase
{

    /** @test */
    public function it_can_get_all_evaluation()
    {
        $evaluation = Evaluation::factory()->create();

        $response = $this->getJson(route('evaluations.index'));

        $response->assertStatus(200);

    }

    /** @test */
    public function it_can_create_a_evaluation()
    {
        $evaluationData = [
            'date' => '2023-12-12',
            'type' => 'EVALUACION',
            'person_id' => 1,
            'mean' => 2.3,
            'user_id' => 1
        ];

        $response = $this->postJson(route('evaluations.store'), $evaluationData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('evaluations', $evaluationData);

    }

    /** @test */
    public function it_can_show_a_evaluation()
    {
        $evaluation = Evaluation::factory()->create();

        $response = $this->getJson(route('evaluations.show', $evaluation->id));

        $response->assertStatus(200);
       
    }

      /** @test */
    public function it_can_update_a_evaluation()
    {
        $evaluation = Evaluation::factory()->create();

        $newData = [
            'date' => '2022-12-12',
            'type' => 'CO-EVALUACION',
            'person_id' => 1,
            'mean' => 2.3,
            'user_id' => 1
        ];

        $response = $this->putJson(route('evaluations.update', $evaluation->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('evaluations', $newData);
    }

    /** @test */
    public function it_can_delete_a_evaluation()
    {
        $evaluation = Evaluation::factory()->create();

        $response = $this->deleteJson(route('evaluations.destroy', $evaluation->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('evaluations', ['id' => $evaluation->id]);
    }

}
