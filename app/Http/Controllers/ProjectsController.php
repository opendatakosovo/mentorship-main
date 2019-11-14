<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/8/2019
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;
use App\Client;
use App\Projects;
use App\Timesheet;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Litepie\Support\Facades\Theme;
use Illuminate\Support\Facades\DB;
class ProjectsController extends Controller
{

    public function index(){

        $projects  = Projects::all();


        $skills = array(
            "communication_skill" => "Communication",
            "team_work_skill" => "Team work",
            "problem_solving_skill" => "Problem Solving",
            "creativity_skill" => "Creativity",
            "adaptability_skill" => "Adaptability",
            "work_ethics_skill" => "Work Ethics",
            "interpersonal_skills_skill" => "Interpersonal Skills",
            "time_management_skill" => "Time Management",
            "leadership_skill" => "Leadership",
            "finance_management_skill" => "Finance Management",
            "capacity_skill" => "Capacity",
            "advocacy_skill" => "Advocacy",
            "critical_thinking_skill" => "Critical Thinking",
            "coding_skill" => "Coding",
            "networking_skill" => "Networking"
        );

        $teams = DB::table('teams')->whereNull('deleted_at')->get();

        foreach($teams as $team){
            $team_result[] = $team;
        }
        $data['skills'] = $skills;
        $data['teams'] = $team_result;
        $data['projects'] = $projects;
        return view('custom.admin.projects')->with('data',$data);

    }

    public function store(Request $request){

//        Projects::create($request->all());


        Projects::firstOrCreate(
            [
                'project_id' => $request->project_id,
                'project_name' =>  $request->project_name,
                'project_description' =>  $request->project_description,
                'team_id' =>  $request->team_id,
                'matching_skills' =>  serialize($request->matching_skills),
                'place'  =>  $request->place,
                'local_mentor' =>  $request->local_mentor,
                'external_mentor' =>  serialize($request->external_mentors),
                'project_status' =>  $request->project_status,
                'next_activity' =>  $request->next_activity,
            ]
        );


        return redirect('admin/projects');
    }

    public function edit(Request $request){
        $id = $request->id;

        if ($id != null) {
            $project = Projects::find($id);

            $project->project_id = $request->project_id;
            $project->project_name = $request->project_name;
            $project->project_description = $request->project_description;
            $project->team_id = $request->team_id;
            $project->matching_skills = serialize($request->matching_skills);
            $project->place = $request->place;
            $project->local_mentor = $request->local_mentor;
            $project->external_mentor = serialize($request->external_mentors);
            $project->project_status = $request->project_status;
            $project->next_activity = $request->next_activity;
            $project->save();

        }

        return redirect('admin/projects');
    }

    public function destroy(Request $request){
        $project_id = $request->id;

        $project = new Projects();
        $project->destroy($project_id);

        return redirect('admin/projects');
    }


    public function match(Request $request){

        $selected = $request->selected;
        $matches = [];

            if($selected != ''){
                foreach($selected as $skill){
                    $mentors = DB::table('clients')
                        ->where($skill, '1')->get();
                }

                foreach($mentors as $mentor){

//                    if(!in_array($mentor->id, $matches)){
                        $matches[] = $mentor;
//                    }
                }
            }

        echo json_encode($matches);

    }

    public function match_local_mentor(Request $request){

        $selected = $request->selected;
        $matches = [];


        if($selected != ''){
                $mentors = DB::table('users')
                    ->join('team_user','users.id','=','team_user.user_id')
                    ->where('team_user.team_id', $selected)
                    ->whereNull('team_user.deleted_at')->get();



            foreach($mentors as $mentor){
                    $matches[] = $mentor;
            }


        echo json_encode($mentors);
        }
    }



    public function fetch_timesheets(Request $request){
        $data_result = [];
        $params = $request->all();

        $totalRecords = Timesheet::count();


        $data = DB::table('timesheets')
            ->offset($params['start'])
            ->where('project_id',$params['project_id'])
            ->limit($params['length'])
            ->get();


        foreach ($data as $d) {
            $project_id = ($d->project_id != '') ? $d->project_id : 0 ;
            $mentor_id = ($d->mentor_id != '') ? $d->mentor_id : 0;
            $from_date = ($d->from_date != '') ? $d->from_date : 0;
            $to_date = ($d->to_date != '') ? $d->to_date : 0;
            $hours = ($d->hours != '') ? $d->hours : 0;
            $data_result[] = array(
                'project_id' => get_project_name($project_id),
                'mentor_id' => get_mentor_name($mentor_id),
                'from_date' => $from_date,
                'to_date' => $to_date,
                'hours' => $hours,
                'actions' => '
                                 
                                    <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                              onclick="deleteTimesheet(' . $d->id . ')">
                                        Delete
                                    </button>

                    '
            );
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data_result   // total data array
        );


        echo json_encode($json_data);
    }

    public function timesheet_store(Request $request){
        Timesheet::create($request->all());

        return redirect('admin/projects');
    }

    public function timesheet_destroy(Request $request){

        $id = $request->id;
        $timesheet = new Timesheet();
        $timesheet->destroy($id);

    }
}