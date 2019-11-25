<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin.web');
    }

    public function index(){

        $skills = Skills::all();
        return view('custom.admin.skills')->with('skills',$skills);
    }

    public function store(Request $request){

        Skills::create($request->all());

        return redirect('admin/skills');
    }

    public function edit(Request $request){
        $id = $request->id;

        if ($id != null) {
            $project = Skills::find($id);

            $project->skill_name = $request->skill_name;
            $project->save();

        }

        return redirect('admin/skills');
    }

    public function destroy(Request $request){
        $project_id = $request->id;

        $project = new Skills();
        $project->destroy($project_id);

        return redirect('admin/skills');
    }
}
