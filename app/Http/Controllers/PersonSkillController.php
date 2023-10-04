<?php

namespace App\Http\Controllers;

use App\Models\PersonSkill;
use Illuminate\Http\Request;

class PersonSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personSkill = PersonSkill::all();
        return response()->json($personSkill, 200);
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
        $personSkill = new PersonSkill;
        $personSkill->person_id = $request->person_id;
        $personSkill->skill_id = $request->skill_id;
        $personSkill->level = $request->level;
        $personSkill->save();
        $data = [
            'message'=>'Person Skill succesfully created',
            'person_skill' =>$personSkill
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personSkill = PersonSkill::find($id);
        if (!$personSkill) {
            return response()->json(['message'=> 'Person Skill not found'], 404);
        }
        return response()->json($personSkill, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonSkill $personSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonSkill $personSkill)
    {
        $personSkill->person_id = $request->person_id;
        $personSkill->skill_id = $request->skill_id;
        $personSkill->level = $request->level;
        $personSkill->save();
        $data = [
            'message' => 'Person Skill succesfully updated',
            'person_skill'=> $personSkill
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personSkill = PersonSkill::find($id);
        if (!$personSkill) {
            return response()->json(['message'=> 'Person Skill not found'], 404);
        }
        $personSkill->delete();
        $data = [
            'message'=> 'Person Skill succesfully deleted',
            'person_skill'=> $personSkill
        ];
        return response()->json($data, 200);
    }
}
