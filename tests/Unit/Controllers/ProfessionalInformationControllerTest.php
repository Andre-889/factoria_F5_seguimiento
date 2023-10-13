<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\ProfessionalInformationController;
use App\Models\ProfessionalInformation;

class ProfessionalInformationControllerTest extends TestCase
{

    public function test_it_can_get_all_ProfessionalInformations()
    {
        $ProfessionalInformations = ProfessionalInformation::factory()->create();

        $response = $this->getJson(route('professionalInformations.index'));

        $response->assertStatus(200);

    }


    public function test_it_can_create_a_ProfessionalInformation()
    {
        $ProfessionalInformationData = [
            'cv' => 'bit.ly/asDFl_1234', 
            'id' => 150, 
            'is_working' => 0, 
            'linkedin' => 'https://www.linkedin.com/in/rocioalonsodev/',
            'is_studying' => 0, 
            'next_bootcamp' => 1, 
            'github' => 'https://github.com/RocioAlonsoDev', 
        ];

        $response = $this->postJson(route('professionalInformations.store'), $ProfessionalInformationData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('professional_informations', $ProfessionalInformationData);
    }


    public function test_it_can_show_a_ProfessionalInformation()
    {
        $ProfessionalInformation = ProfessionalInformation::factory()->create();

        $response = $this->getJson(route('professionalInformations.show', $ProfessionalInformation->id));

        $response->assertStatus(200);
    }


    public function test_it_can_update_a_ProfessionalInformation()
    {
        $newData = [
            'cv' => 'bit.ly/asDFl_1234', 
            'id' => 150, 
            'is_working' => 1, 
            'linkedin' => 'https://www.linkedin.com/in/beatriz-cano-fern%C3%A1ndez-4a8684210/',
            'is_studying' => 1, 
            'next_bootcamp' => 0, 
            'github' => 'https://github.com/BeatrizCano', 
        ];

        $response = $this->putJson(route('professionalInformations.update', 150), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('professional_informations', $newData);
    }


    public function test_it_can_delete_a_ProfessionalInformation()
    {
        $response = $this->deleteJson(route('professionalInformations.destroy', 150));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('professional_informations', ['id' => 150]);
    }

}