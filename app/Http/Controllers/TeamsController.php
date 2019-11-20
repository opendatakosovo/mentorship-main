<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    public function get_team_projects(Request $request){
        $team_id = $request->id;
        $data =[];

        $projects = DB::table('projects')
            ->select(DB::raw('*'))
            ->where('team_id',$team_id)
            ->get();


        foreach($projects as $project){
            $data[] = array(
                "id" => $project->id,
                "project_name" => $project->project_name,
                "project_description" => $project->project_description,
                "team_image" => str_replace('public','/storage',get_team_image_uploads($project->team_id))
            );
        }

        if($data){
            return json_encode($data);
        }
    }
}
