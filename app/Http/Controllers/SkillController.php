<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::with('category')->get();
        return response()->json($skill, 200);
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
        $skill = new Skill;
        $skill->name=$request->name;
        $skill->category_id=$request->category_id;
        $skill->save();
        $data = [
            'message' => 'Skill successfully created',
            'skill' => $skill
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skill = Skill::with('category')->find($id);
        if (!$skill) {
            return response()->json(['message' => 'Skill not found'],  404);
        }
        return response()->json($skill, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $skill->name=$request->name;
        $skill->category_id=$request->category_id;
        $skill->save();
        $data = [
            'message' => 'Skill sucessfully updated',
            'skill' => $skill
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $skill = Skill::find($id);
        if(!$skill) {
            return response()->json(['message'=> 'Skill not found'], 404);
        }

        $skill->delete();
        $data = [
            'message' => 'Skill deleted successfully',
            'skill' => $skill
        ];
        return response()->json($data, 200);
    }
}
