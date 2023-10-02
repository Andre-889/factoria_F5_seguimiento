<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        return response()->json($category, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        $data = [
            'message' => 'Created category successfully',
            'category' => $category
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id); 
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }
        return response()->json($category, 200); 
    }

    // public function show(Book $book)
    // {
    //     return response()->json($book);
    // }


    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        $data = [
            'message'=> 'Category Updated successfully',
            'category'=> $category
        ];
        return response()->json($data);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }

        $category->delete();
        return response()->json(['message' => 'Categoría eliminada'], 204);
    }
}

