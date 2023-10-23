<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluationStackRequest;
use Illuminate\Http\Request;
use App\Models\EvaluationStack;
use App\Models\Stack;
use App\Models\Evaluation;

class EvaluationStackController extends Controller
{
    public function index()
    {
        $evaluationStacks=EvaluationStack::with(['stacks', 'evaluations'])->get();
        return response()->json($evaluationStacks, 200);
    }


    public function store(EvaluationStackRequest $request)
    {
        $evaluationStack = new EvaluationStack;
        $evaluationStack->evaluation_id = $request->evaluation_id;
        $evaluationStack->stack_id = $request->stack_id;
        $evaluationStack->level = $request->level;
        $evaluationStack->save();

        $data = [
            'message' => 'evaluation stack successfully created',
            'evaluation_stack' => $evaluationStack
        ];

        return response()->json($data, 201);
    }
    public function show( $id)
    {
        $evaluationStack = EvaluationStack::with(['stacks', 'evaluations'])->find($id);
        return response()->json($evaluationStack, 200);
    }

    public function update(EvaluationStackRequest $request, EvaluationStack $evaluationStack)
    {
        $evaluationStack->evaluation_id = $request->evaluation_id;
        $evaluationStack->stack_id = $request->stack_id;
        $evaluationStack->level = $request->level;
        $evaluationStack->save();

        $data = [
            'message' => 'evaluation stack  successfully updated',
            'evaluation_stack' => $evaluationStack
        ];

        return response()->json($data, 200);
    }
public function destroy(EvaluationStack $evaluationStack)
    {
        $evaluationStack->delete();

        $data = [
            'message' => 'evaluation stack successfully deleted',
            'evaluation_stack' => $evaluationStack
        ];

        return response()->json($data, 200);
    }

}