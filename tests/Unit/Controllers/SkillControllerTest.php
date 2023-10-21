<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\SkillController;
use App\Models\Skill;
use App\Models\Category;


class SkillControllerTest extends TestCase
{
    

    /** @test */
    public function it_can_get_all_skills()
    {
        $skills = Skill::factory()->create();

        $response = $this->getJson(route('skills.index'));

        $response->assertStatus(200);
        //$response->assertJson($skills->toArray());
    }

    /** @test */
    public function it_can_create_a_skill()
    {
        $category = Category::factory()->create();

        $skillData = [
            'name' => 'Test Skill',
            'category_id' => $category->id,
        ];

        $response = $this->postJson(route('skills.store'), $skillData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('skills', $skillData);
    }

    /** @test */
    public function it_can_show_a_skill()
    {
        $skill = Skill::factory()->create();

        $response = $this->getJson(route('skills.show', $skill->id));

        $response->assertStatus(200);
        //$response->assertJson($skill->toArray());
    }

    /** @test */
    public function it_can_update_a_skill()
    {
        $skill = Skill::factory()->create();

        $newData = [
            'name' => 'Updated Skill',
            'category_id' => $skill->category_id, // Mantener la misma categoría
        ];

        $response = $this->putJson(route('skills.update', $skill->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('skills', $newData);
    }

    /** @test */
    public function it_can_delete_a_skill()
    {
        $skill = Skill::factory()->create();

        $response = $this->deleteJson(route('skills.destroy', $skill->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('skills', ['id' => $skill->id]);
    }
}
