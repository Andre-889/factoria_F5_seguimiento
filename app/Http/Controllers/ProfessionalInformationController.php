<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalInformation;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;

class ProfessionalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionalInformation = ProfessionalInformation::all();
        return response()->json($professionalInformation, 200);
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
        $professionalInformation = new ProfessionalInformation;
        $professionalInformation->cv = $request->cv;
        $professionalInformation->person_id = $request->person_id;
        $professionalInformation->is_working = $request->is_working;
        $professionalInformation->linkedin = $request->linkedin;
        $professionalInformation->is_studying = $request->is_studying;
        $professionalInformation->next_bootcamp = $request->next_bootcamp;
        $professionalInformation->github = $request->github;
        $professionalInformation->save();
        $data = [
            'message' => 'Professional Informations successfully created',
            'professional_information' => $professionalInformation
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $professionalInformation = ProfessionalInformation::find($id);
        if (!$professionalInformation) {
            return response()->json(['message'=> 'Professional Information Not found'], 404);
        }
        return response()->json($professionalInformation, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfessionalInformation $professionalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfessionalInformation $professionalInformation)
    {
        $professionalInformation->cv = $request->cv;
        $professionalInformation->person_id = $request->person_id;
        $professionalInformation->is_working = $request->is_working;
        $professionalInformation->linkedin = $request->linkedin;
        $professionalInformation->is_studying = $request->is_studying;
        $professionalInformation->next_bootcamp = $request->next_bootcamp;
        $professionalInformation->github = $request->github;
        $professionalInformation->save();
        $data = [
            'message' => 'Professional Informations successfully updated',
            'professional_information' => $professionalInformation
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professionalInformation = ProfessionalInformation::find($id);
        if (!$professionalInformation) {
            return response()->json(['message'=> 'Professional Informations not found'], 404);
        }
        $professionalInformation->delete();
        $data = [
            'message' => 'Professional Informations successfully deleted',
            'professional_information' => $professionalInformation
        ];
        return response()->json($data, 200);
    }
}
