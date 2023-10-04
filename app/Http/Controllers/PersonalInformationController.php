<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personalInformation = PersonalInformation::all();
        return response()->json($personalInformation, 200);        
    
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
        $personalInformation = new PersonalInformation;
        $personalInformation->photo = $request->photo;
        $personalInformation->emergency_contact = $request->emergency_contact;
        $personalInformation->protection_data = $request->protection_data;
        $personalInformation->coder_commitment = $request->coder_commitment;
        $personalInformation->coder_id = $request->coder_id;
        $personalInformation->save();

        $data = [
            'message' => 'Created personal information successfully',
            'personal_information' => $personalInformation
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personalInformation = PersonalInformation::find($id);
        if (!$personalInformation) {
            return response()->json(['message' => 'No find the personal information'], 404); 
        }
        return response()->json($personalInformation, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        $personalInformation->photo = $request->photo;
        $personalInformation->emergency_contact = $request->emergency_contact;
        $personalInformation->protection_data = $request->protection_data;
        $personalInformation->coder_commitment = $request->coder_commitment;
        $personalInformation->coder_id = $request->coder_id;
        $personalInformation->save();

        $data = [
            'message'=> 'Personal information Updated successfully',
            'personal_information'=> $personalInformation
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInformation $personalInformation)
    {
        $personalInformation->delete();
        $data = [
            'message' => 'Personal information deleted successfully',
            'personal_information' => $personalInformation
        ];
        
        return response()->json($data);
    }
}
