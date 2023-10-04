<?php

namespace App\Http\Controllers;

use App\Models\Person_skill;
use Illuminate\Http\Request;

class PersonSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person_skill = Person_Skill::all();
        return response()->json($person_skill, 200);
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
        $person_skill = new Person_skill;
        $person_skill->person_id = $request->person_id;
        $person_skill->skill_id = $request->skill_id;
        $person_skill->level = $request->level;
        $person_skill->save();
        $data = [
            'message'=>'Person Skill succesfully created',
            'person_skill' =>$person_skill
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $person_skill = Person_skill::find($id);
        if (!$person_skill) {
            return response()->json(['message'=> 'Person Skill not found'], 404);
        }
        return response()->json($person_skill, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person_skill $person_skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person_skill $person_skill)
    {
        $person_skill->person_id = $request->person_id;
        $person_skill->skill_id = $request->skill_id;
        $person_skill->level = $request->level;
        $person_skill->save();
        $data = [
            'message' => 'Person Skill succesfully updated',
            'person_skill'=> $person_skill
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $person_skill = Person_skill::find($id);
        if (!$person_skill) {
            return response()->json(['message'=> 'Person Skill not found'], 404);
        }
        $person_skill->delete();
        $data = [
            'message'=> 'Person Skill succesfully deleted',
            'person_id'=> $person_skill
        ];
        return response()->json($data, 200);
    }
}
