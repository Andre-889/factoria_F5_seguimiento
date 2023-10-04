<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonStack;
use App\Models\Stack;

class PersonStackController extends Controller
{
    public function index()
    {
        $personStacks=PersonStack::with('stacks')->get();
        return response()->json($personStacks, 200);
    }


    public function store(Request $request)
    {
        $personStack = new PersonStack;
        $personStack->person_id = $request->person_id;
        $personStack->stack_id = $request->stack_id;
        $personStack->level = $request->level;
        $personStack->save();

        $data = [
            'message' => 'Person stack successfully created',
            'person_stack' => $personStack
        ];

        return response()->json($data, 201);
    }

    public function show( $id)
    {
        $personStack = PersonStack::with('stacks')->find($id);
        return response()->json($personStack, 200);
    }

    public function update(Request $request, PersonStack $personStack)
    {
        $personStack->person_id = $request->person_id;
        $personStack->stack_id = $request->stack_id;
        $personStack->level = $request->level;
        $personStack->save();

        $data = [
            'message' => 'Person stack  successfully updated',
            'person_stack' => $personStack
        ];

        return response()->json($data, 200);
    }

    public function destroy(PersonStack $personStack)
    {
        $personStack->delete();

        $data = [
            'message' => 'Person stack successfully deleted',
            'person_stack' => $personStack
        ];

        return response()->json($data, 200);
    }

}
