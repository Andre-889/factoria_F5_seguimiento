<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\PersonalInformationController;
use App\Models\PersonalInformation;

class PersonalInformationControllerTest extends TestCase
{

    public function test_it_can_get_all_PersonalInformations()
    {
        $PersonalInformations = PersonalInformation::factory()->create();

        $response = $this->getJson(route('personalInformation.index'));

        $response->assertStatus(200);

    }


    public function test_it_can_create_a_PersonalInformation()
    {
        $PersonalInformationData = [
            'photo' => 'bit.ly/asDFl_1234',
            'emergency_contact' => 123456789,
            'protection_data' => 'src/assets/img/image.jpg',
            'coder_commitment' => 'src/assets/img/image.jpg',
            'id' => 3,
        ];

        $response = $this->postJson(route('personalInformation.store'), $PersonalInformationData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('personal_informations', $PersonalInformationData);
    }


    public function test_it_can_show_a_PersonalInformation()
    {
        $PersonalInformation = PersonalInformation::factory()->create();

        $response = $this->getJson(route('personalInformation.show', $PersonalInformation->id));

        $response->assertStatus(200);
    }


    public function test_it_can_update_a_PersonalInformation()
    {
        $newData = [
            'photo' => 'bit.ly/asDFl_1234',
            'emergency_contact' => 987654321,
            'protection_data' => 'src/assets/img/image.jpg',
            'coder_commitment' => 'src/assets/img/image.jpg',
            'id' => 3,
        ];

        $response = $this->putJson(route('personalInformation.update', 3), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('personal_informations', $newData);
    }


    public function test_it_can_delete_a_PersonalInformation()
    {
        $response = $this->deleteJson(route('personalInformation.destroy', 3));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('personal_informations', ['id' => 3]);
    }

}