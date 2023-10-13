<?php

namespace App\Http\Controllers;

use App\Models\ProjectsWorkshop;
use Illuminate\Http\Request;

class ProjectsWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectsWorkshop= ProjectsWorkshop::all();
        return response()->json($projectsWorkshop, 200); 
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
        
        $projectsWorkshop = new ProjectsWorkshop;
        $projectsWorkshop->person_id = $request->person_id;
        $projectsWorkshop->project_name = $request->project_name;
        $projectsWorkshop->observations = $request->observations;
        $projectsWorkshop->submission_date = $request->submission_date;        
        $projectsWorkshop->save();

        $data = [
            'message' => 'Created projects workshop successfully',
            'projects_workshop' => $projectsWorkshop
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projectsWorkshop = ProjectsWorkshop::find($id);
        if (!$projectsWorkshop) {
            return response()->json(['message' => 'No find the projects workshop'], 404); 
        }
        return response()->json($projectsWorkshop, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectsWorkshop $projectsWorkshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectsWorkshop $projectsWorkshop)
    {
        $projectsWorkshop->person_id = $request->person_id;
        $projectsWorkshop->project_name = $request->project_name;
        $projectsWorkshop->observations = $request->observations;
        $projectsWorkshop->submission_date = $request->submission_date;        
        $projectsWorkshop->save();

        $data = [
            'message'=> 'Projects workshop Updated successfully',
            'projects_workshop' => $projectsWorkshop
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectsWorkshop $projectsWorkshop)
    {
        $projectsWorkshop->delete();
        $data = [
            'message' => 'Projects workshop deleted successfully',
            'projects_workshop' => $projectsWorkshop
        ];
        
        return response()->json($data);
    }
}
