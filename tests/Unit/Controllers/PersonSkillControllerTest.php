<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\PersonSkill;
use App\Models\Skill;

class PersonSkillControllerTest extends TestCase
{
  
    /** @test */
    public function it_can_get_all_person_skill()
    {
        $response = $this->getJson(route('personSkills.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_person_skill()
    {
        $skill = Skill::factory()->create();

        $personSkillData = [
            'person_id' => 1,
            'level' => 1, 
            'skill_id' => $skill->id,
        ];

        $response = $this->postJson(route('personSkills.store'), $personSkillData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('person_skills', $personSkillData);
    }

    /** @test */
    public function it_can_show_a_person_skill()
    {
        $personSkill = PersonSkill::factory()->create();

        $response = $this->getJson(route('personSkills.show', $personSkill->id));

        $response->assertStatus(200);
        $response->assertJson($personSkill->toArray());
        
    }

    /** @test */
    public function it_can_update_a_person_skill()
    {
        $personSkill = PersonSkill::factory()->create();

        $newData = [
            'person_id' => 2,
            'level' => 2, 
            'skill_id' => $personSkill->skill_id, 
        ];

        $response = $this->putJson(route('personSkills.update', $personSkill->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('person_skills', $newData);

    }

      /** @test */
      public function it_can_delete_a_person_skill()
      {
        $personSkill = PersonSkill::factory()->create();

        $response = $this->deleteJson(route('personSkills.destroy', $personSkill->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('person_skills', ['id' => $personSkill->id]);

      }
      
}
