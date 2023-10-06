<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{

    public function index()
    {
        $evaluation=Evaluation::all();
        return response()->json($evaluation, 200);
    }

    public function store(Request $request)
    {
        $evaluation = new Evaluation;
        $evaluation->date = $request->date;
        $evaluation->type = $request->type;
        $evaluation->mean = $request->mean;
        $evaluation->person_id = $request->person_id;
        $evaluation->user_id = $request->user_id;
        $evaluation->save();
        $data = [
            'message' => 'Evaluation successfully created',
            'evaluation' => $evaluation
        ];
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $evaluation = Evaluation::find($id); 
        if (!$evaluation) {
            return response()->json(['message' => 'Evaluation not found'], 404); 
        }
        return response()->json($evaluation, 200); 
    }

    public function update(Request $request, Evaluation $evaluation)
    {
        $evaluation->date = $request->date;
        $evaluation->type = $request->type;
        $evaluation->mean = $request->mean;
        $evaluation->person_id = $request->person_id;
        $evaluation->user_id = $request->user_id;
        $evaluation->save();
        $data = [
            'message'=> 'Evaluation successfully updated',
            'evaluation'=> $evaluation
        ];
        return response()->json($data, 200);
    }

    public function destroy($id)
    {

        $evaluation = Evaluation::find($id);
        if (!$evaluation) {
            return response()->json(['message' => 'Evaluation not found'], 404); 
        }

        $evaluation->delete();
        $data = [
            'message' => 'Evaluation successfully deleted',
            'evaluation' => $evaluation
        ];
        return response()->json($data, 200);
    }
}