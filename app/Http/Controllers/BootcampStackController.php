<?php

namespace App\Http\Controllers;
use App\Models\Stack;
use App\Models\BootcampStack;
use Illuminate\Http\Request;
use App\Http\Requests\BootcampStackRequest;

class BootcampStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bootcampStack = BootcampStack::with('stacks')->get();
        return response()->json($bootcampStack, 200);
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
    public function store(BootcampStackRequest $request)
    {
        $bootcampStack = new BootcampStack;
        $bootcampStack->bootcamp_id = $request->bootcamp_id;
        $bootcampStack->stack_id = $request->stack_id;
        $bootcampStack->save();
        $data = [
            'message' => 'BootcampStack successfully created',
            'bootcamp_stack' => $bootcampStack
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bootcampStack = BootcampStack::with('stacks')->find($id);
        
        if (!$bootcampStack) {
            return response()->json(['message' => 'BootcampStack not found'], 404);
        }
    
        return response()->json($bootcampStack, 200);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BootcampStack $bootcampbootcampStack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BootcampStackRequest $request, BootcampStack $bootcampStack)
    {
        $bootcampStack->bootcamp_id = $request->bootcamp_id;
        $bootcampStack->stack_id = $request->stack_id;
        $bootcampStack->save();
        $data = [
            'message'=> 'BootcampStack  successfully Updated',
            'bootcamp_stack'=> $bootcampStack
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BootcampStack $bootcampStack)
    {
        $bootcampStack->delete();
        $data = [
            'message' => 'BootcampStack  successfully deleted',
            'bootcamp_stack' => $bootcampStack
        ];
        
        return response()->json($data, 200);
    }
}
