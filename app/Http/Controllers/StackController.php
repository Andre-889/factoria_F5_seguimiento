<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use Illuminate\Http\Request;

class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stack = Stack::all();
        return response()->json($stack, 200);
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
        $stack = new Stack;
        $stack->name = $request->name;
        $stack->save();
        $data = [
            'message' => 'Created stack successfully',
            'stack' => $stack
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stack = Stack::find($id); 
        if (!$stack) {
            return response()->json(['message' => 'No find the stack'], 404); 
        }
        return response()->json($stack, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stack $stack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stack $stack)
    {
        $stack->name = $request->name;
        $stack->save();
        $data = [
            'message'=> 'Stack Updated successfully',
            'stack'=> $stack
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stack $stack)
    {
        $stack->delete();
        $data = [
            'message' => 'Stack deleted successfully',
            'stack' => $stack
        ];
        
        return response()->json($data);
    }

}
