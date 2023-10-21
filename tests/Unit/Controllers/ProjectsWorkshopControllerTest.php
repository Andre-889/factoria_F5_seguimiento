<?php 
namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\ProjectsWorkshop;

class ProjectsWorkshopControllerTest extends TestCase{

public function test_it_can_get_all_projects_workshop()
{
    $projectsWorkshop = ProjectsWorkshop::factory()->create();

    $response = $this->getJson(route('projectsWorkshops.index'));
    $response->assertStatus(200);

}

public function test_it_can_create_a_projects_workshop()
{
    // $projectsWorkshop = ProjectsWorkshop::factory()->create();

    $projectsWorkshopData = [
        'person_id' => 1,
        'project_name' => 'Proyecto Uno',
        'observations' => 'Sin observaciones',
        'user_id' => 'María',
        'submission_date' => '2023-12-12'
    ];
    $response = $this->postJson(route('projectsWorkshops.store'), $projectsWorkshopData);
    $response->assertStatus(201);
    $this->assertDatabaseHas('projects_workshops', $projectsWorkshopData);
}

public function test_it_can_show_a_projects_workshop()
{
    $projectsWorkshop = ProjectsWorkshop::factory()->create();
    $response = $this->getJson(route('projectsWorkshops.show', $projectsWorkshop->id));

    $response->assertStatus(200);
}

public function test_it_can_update_a_projects_workshop()
{
    $projectsWorkshop = ProjectsWorkshop::factory()->create();

    $newData = [
        'person_id' => 2,
        'project_name' => 'Proyecto Dos',
        'observations' => 'Sin observaciones',
        'user_id' => 'Manu',
        'submission_date' => '2023-12-12'
    ];
    $response = $this->putJson(route('projectsWorkshops.update', $projectsWorkshop->id), $newData);
    $response->assertStatus(200);
    $this->assertDatabaseHas('projects_workshops', $newData);
}

public function test_it_can_delete_a_projects_workshop()
{
    $projectsWorkshop = ProjectsWorkshop::factory()->create();
    
    $response = $this->deleteJson(route('projectsWorkshops.destroy', $projectsWorkshop->id));

    $response->assertStatus(200);
    $this->assertDatabaseMissing('projects_workshops', ['id' => $projectsWorkshop->id]);
}

}

?>