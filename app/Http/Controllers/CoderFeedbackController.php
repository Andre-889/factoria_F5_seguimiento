<?php

namespace App\Http\Controllers;

use App\Models\CoderFeedback;
use Illuminate\Http\Request;

class CoderFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coderFeedback = CoderFeedback::all();
        return response()->json($coderFeedback, 200);
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
        $coderFeedback = new CoderFeedback;
        $coderFeedback->text = $request->text;
        $coderFeedback->person_id = $request->person_id;
        $coderFeedback->user_id = $request->user_id;
        $coderFeedback->date = $request->date;
        $coderFeedback->observations = $request->observations;
        $coderFeedback->improve = $request->improve;
        $coderFeedback->save();
        $data = [
            'message'=>'Coder Feedback successfully created',
            'coder_feedback'=>$coderFeedback
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coderFeedback = CoderFeedback::find($id);
        if (!$coderFeedback) {
            return response()->json(['message' => 'Coder Feedbacks not found'], 404);
        }
        return response()->json($coderFeedback, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoderFeedback $coderFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoderFeedback $coderFeedback)
    {
        $coderFeedback->text=$request->text;
        $coderFeedback->person_id=$request->person_id;
        $coderFeedback->user_id=$request->user_id;
        $coderFeedback->date=$request->date;
        $coderFeedback->observations=$request->observations;
        $coderFeedback->improve=$request->improve;
        $coderFeedback->save();
        $data = [
            'message' => 'Coder Feedback successfully updated',
            'coder_feedback' => $coderFeedback
        ];
        return response()->json($data, 200);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coderFeedback = CoderFeedback::find($id);
        if (!$coderFeedback) {
            return response()->json(['message'=> 'Coder Feedback not found'], 404);
        }
        $coderFeedback->delete();
        $data = [
            'message' => 'Coder Feedback successfully deleted',
            'coder_feedback' => $coderFeedback
        ];
        return response()->json($data, 200);
    }
}
