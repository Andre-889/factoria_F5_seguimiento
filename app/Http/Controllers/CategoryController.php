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
        $category=Category::with('skills')->get();
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
            'message' => 'Category successfully created',
            'category' => $category
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::with('skills')->find($id); 
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404); 
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
            'message'=> 'Category successfully updated',
            'category'=> $category
        ];
        return response()->json($data, 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404); 
        }

        $category->delete();
        $data = [
            'message' => 'Category deleted successfully',
            'category' => $category
        ];
        return response()->json($data);
    }
}

