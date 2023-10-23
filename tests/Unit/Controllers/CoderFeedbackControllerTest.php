<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\CoderFeedbackController;
use App\Models\CoderFeedback;

class CoderFeedbackControllerTest extends TestCase
{

    public function test_it_can_get_all_coderfeedbacks()
    {
        $coderfeedbacks = CoderFeedback::factory()->create();

        $response = $this->getJson(route('coderFeedbacks.index'));

        $response->assertStatus(200);

    }


    public function test_it_can_create_a_coderfeedback()
    {
        $coderfeedbackData = [
            'text' => 'Modi quis illo necessitatibus impedit dolores.', 
            'person_id' => 1, 
            'user_id' => 1, 
            'date' => '2023-10-13', 
            'observations' => 'Nihil et dolores placeat illo autem. Quisquam nemo...', 
            'improve' => 'Voluptas suscipit sunt molestiae magni recusandae ...', 
        ];

        $response = $this->postJson(route('coderFeedbacks.store'), $coderfeedbackData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('coder_feedbacks', $coderfeedbackData);
    }


    public function test_it_can_show_a_coderfeedback()
    {
        $coderfeedback = CoderFeedback::factory()->create();

        $response = $this->getJson(route('coderFeedbacks.show', $coderfeedback->id));

        $response->assertStatus(200);
    }


    public function test_it_can_update_a_coderfeedback()
    {
        $coderfeedback = CoderFeedback::factory()->create();

        $newData = [
            'text' => 'Modi quis illo necessitatibus impedit dolores.', 
            'person_id' => 2, 
            'user_id' => 2, 
            'date' => '2023-10-15', 
            'observations' => 'Nihil et dolores placeat illo autem. Quisquam nemo...', 
            'improve' => 'Voluptas suscipit sunt molestiae magni recusandae ...'
        ];

        $response = $this->putJson(route('coderFeedbacks.update', $coderfeedback->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('coder_feedbacks', $newData);
    }


    public function test_it_can_delete_a_coderfeedback()
    {
        $coderfeedback = CoderFeedback::factory()->create();

        $response = $this->deleteJson(route('coderFeedbacks.destroy', $coderfeedback->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('coder_feedbacks', ['id' => $coderfeedback->id]);
    }

}
