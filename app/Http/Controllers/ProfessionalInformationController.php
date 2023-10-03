<?php

namespace App\Http\Controllers;

use App\Models\Professional_information;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;

class ProfessionalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professional_information = Professional_information::all();
        return response()->json($professional_information, 200);
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
        $professional_information = new Professional_information;
        $professional_information->cv = $request->cv;
        $professional_information->person_id = $request->person_id;
        $professional_information->is_working = $request->is_working;
        $professional_information->linkedin = $request->linkedin;
        $professional_information->is_studying = $request->is_studying;
        $professional_information->next_bootcamp = $request->next_bootcamp;
        $professional_information->github = $request->github;
        $professional_information->save();
        $data = [
            'message' => 'Professional Informations successfully created',
            'professional_information' => $professional_information
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $professional_information = Professional_information::find($id);
        if (!$professional_information) {
            return response()->json(['message'=> 'Professional Information Not found'], 404);
        }
        return response()->json($professional_information, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professional_information $professional_information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professional_information $professional_information)
    {
        $professional_information->cv = $request->cv;
        $professional_information->person_id = $request->person_id;
        $professional_information->is_working = $request->is_working;
        $professional_information->linkedin = $request->linkedin;
        $professional_information->is_studying = $request->is_studying;
        $professional_information->next_bootcamp = $request->next_bootcamp;
        $professional_information->github = $request->github;
        $professional_information->save();
        $data = [
            'message' => 'Professional Informations successfully updated',
            'professional_information' => $professional_information
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professional_information = Professional_information::find($id);
        if (!$professional_information) {
            return response()->json(['message'=> 'Professional Informations not found'], 404);
        }
        $professional_information->delete();
        $data = [
            'message' => 'Professional Informations successfully deleted',
            'professional_information' => $professional_information
        ];
        return response()->json($data, 200);
    }
}
