<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

class CategoryControllerTest extends TestCase
{

    /** @test */
    public function it_can_get_all_categories()
    {
        $categories = Category::factory()->create();

        $response = $this->getJson(route('categories.index'));

        $response->assertStatus(200);

    }

    /** @test */
    public function it_can_create_a_category()
    {
        $categoryData = [
            'name' => 'Test Category',
        ];

        $response = $this->postJson(route('categories.store'), $categoryData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', $categoryData);

    }

    /** @test */
    public function it_can_show_a_category()
    {
        $category = Category::factory()->create();

        $response = $this->getJson(route('categories.show', $category->id));

        $response->assertStatus(200);
    }

      /** @test */
    public function it_can_update_a_category()
    {
        $category = Category::factory()->create();

        $newData = [
            'name' => 'Updated Category',
        ];

        $response = $this->putJson(route('categories.update', $category->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', $newData);
    }

    /** @test */
    public function it_can_delete_a_category()
    {
        $category = Category::factory()->create();

        $response = $this->deleteJson(route('categories.destroy', $category->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }

}
