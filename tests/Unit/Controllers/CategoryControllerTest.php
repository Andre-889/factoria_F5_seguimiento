<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
//use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryControllerTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function it_can_get_all_categories()
    {
        // Crear categorías de prueba usando la fábrica
        $categories = Category::factory()->create();

        // Hacer una solicitud GET a la ruta index del controlador
        $response = $this->getJson(route('categories.index'));


        // Verificar que la respuesta sea exitosa (código de respuesta 200)
        $response->assertStatus(200);

        // Verificar que el número correcto de categorías se devuelva en la respuesta
        //$response->assertJsonCount(5);

        // Verificar que las categorías devueltas sean las mismas que las que creamos
        //$response->assertJson($categories->toArray());
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
        //$response->assertJson($category->toArray());
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
