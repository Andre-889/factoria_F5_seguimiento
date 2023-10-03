<?php

namespace App\Http\Controllers;

use App\Models\Coder_feedback;
use Illuminate\Http\Request;

class CoderFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coder_feedback = Coder_feedback::all();
        return response()->json($coder_feedback, 200);
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
        $coder_feedback = new Coder_feedback;
        $coder_feedback->text = $request->text;
        $coder_feedback->person_id = $request->person_id;
        $coder_feedback->user_id = $request->user_id;
        $coder_feedback->date = $request->date;
        $coder_feedback->observations = $request->observations;
        $coder_feedback->improve = $request->improve;
        $coder_feedback->save();
        $data = [
            'message'=>'Coder Feedback successfully created',
            'coder_feedback'=>$coder_feedback
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coder_feedback = Coder_feedback::find($id);
        if (!$coder_feedback) {
            return response()->json(['message' => 'Coder Feedbacks not found'], 404);
        }
        return response()->json($coder_feedback, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coder_feedback $coder_feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coder_feedback $coder_feedback)
    {
        $coder_feedback->text=$request->text;
        $coder_feedback->person_id=$request->person_id;
        $coder_feedback->user_id=$request->user_id;
        $coder_feedback->date=$request->date;
        $coder_feedback->observations=$request->observations;
        $coder_feedback->improve=$request->improve;
        $coder_feedback->save();
        $data = [
            'message' => 'Coder Feedback successfully updated',
            'coder_feedback' => $coder_feedback
        ];
        return response()->json($data);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coder_feedback = Coder_feedback::find($id);
        if (!$coder_feedback) {
            return response()->json(['message'=> 'Coder Feedback not found'], 404);
        }
        $coder_feedback->delete();
        $data = [
            'message' => 'Coder Feedback succesfully deleted',
            'coder_feedback' => $coder_feedback
        ];
        return response()->json($data, 200);
    }
}
