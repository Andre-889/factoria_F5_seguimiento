<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonStack;
use App\Models\Stack;

class PersonStackController extends Controller
{
    public function index()
    {
        $personStacks = PersonStack::all();
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
            'message' => 'Created person_stack successfully',
            'person_stack' => $personStack
        ];

        return response()->json($data, 201);
    }

    public function show(PersonStack $personStack)
    {
        return response()->json($personStack, 200);
    }

    public function update(Request $request, PersonStack $personStack)
    {
        $personStack->person_id = $request->person_id;
        $personStack->stack_id = $request->stack_id;
        $personStack->level = $request->level;
        $personStack->save();

        $data = [
            'message' => 'Person_stack updated successfully',
            'person_stack' => $personStack
        ];

        return response()->json($data);
    }

    public function destroy(PersonStack $personStack)
    {
        $personStack->delete();

        $data = [
            'message' => 'Person_stack deleted successfully',
            'person_stack' => $personStack
        ];

        return response()->json($data);
    }

}
