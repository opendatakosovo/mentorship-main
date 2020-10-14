<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/8/2019
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;

use App\Assignments;
use App\Mail\ProjectCreatedEmail;
use App\Projects;
use App\Timesheet;
use App\User;
use Barryvdh\Debugbar\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:admin.web');
    }

    public function index()
    {

        if (is_superuser(user()->email) == 'true') {
            $projects = Projects::all();
        } else {
            $team_id = DB::table('team_user')
                ->select(DB::raw('team_id'))
                ->where('user_id', user()->id)
                ->first();

            $projects = Projects::where('team_id', $team_id->team_id)->get();
        }

        $skills = get_skills();

        foreach ($skills as $skill) {
            $skill_res[] = $skill->skill_name;
        }

        $skill_fetched = [];
        foreach ($skill_res as $skill) {
            $skill_fetched[strtolower(str_replace(' ', '_', $skill))] = $skill;

        }

//        $skills = array(
        //            "communication_skill" => "Communication",
        //            "team_work_skill" => "Team work",
        //            "problem_solving_skill" => "Problem Solving",
        //            "creativity_skill" => "Creativity",
        //            "adaptability_skill" => "Adaptability",
        //            "work_ethics_skill" => "Work Ethics",
        //            "interpersonal_skills_skill" => "Interpersonal Skills",
        //            "time_management_skill" => "Time Management",
        //            "leadership_skill" => "Leadership",
        //            "finance_management_skill" => "Finance Management",
        //            "capacity_skill" => "Capacity",
        //            "advocacy_skill" => "Advocacy",
        //            "critical_thinking_skill" => "Critical Thinking",
        //            "coding_skill" => "Coding",
        //            "networking_skill" => "Networking"
        //        );

        $teams = DB::table('teams')->whereNull('deleted_at')->get();

        foreach ($teams as $team) {
            $team_result[] = $team;
        }

        $data['skills'] = $skill_fetched;
        $data['teams'] = $team_result;
        $data['projects'] = $projects;
        return view('custom.admin.projects')->with('data', $data);

    }

    public function store(Request $request)
    {

//        Projects::create($request->all());

        $project = Projects::firstOrCreate(
            [
                'project_id' => $request->project_id,
                'project_name' => $request->project_name,
                'project_description' => $request->project_description,
                'team_id' => $request->team_id,
                'matching_skills' => serialize($request->matching_skills),
                'place' => $request->place,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
                'website' => $request->website,
                'local_mentor' => $request->local_mentor,
                'external_mentor' => serialize($request->external_mentors),
                'project_status' => $request->project_status,
                'next_activity' => $request->next_activity,
            ]
        );

        foreach ($request->external_mentors as $mentor) {

            Assignments::firstOrCreate(
                [
                    'mentor_id' => $mentor,
                    'project_id' => $project->id,
                    'status' => "Pending",
                ]
            );
        }
        $project_name = $request->project_name;
        $project_desc = $request->project_description;
        $project_from_date = $request->from_date;
        $project_to_date = $request->to_date;

        foreach ($request->external_mentors as $mentor_id) {

            $mentor_emails[] = DB::table('clients')
                ->select(DB::raw('email'))
                ->where('id', '=', $mentor_id)
                ->first();
        }

//        FIX THIS
        foreach ($mentor_emails as $mentor_email) {
            Mail::to($mentor_email->email)->send(new ProjectCreatedEmail($mentor_email->email, $project_name, $project_desc, $project_from_date, $project_to_date));
        }

//

        return redirect('admin/projects');
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        if ($id != null) {
            $project = Projects::find($id);

//            $existing_external_mentors = unserialize($project->external_mentor);

            $first_array = DB::table('assignments')
                ->select(DB::raw('mentor_id,project_id,status'))
                ->where('project_id', '=', $id)
                ->get();

            $project->project_id = $request->project_id;
            $project->project_name = $request->project_name;
            $project->project_description = $request->project_description;
            $project->team_id = $request->team_id;
            $project->matching_skills = serialize($request->matching_skills);
            $project->place = $request->place;
            $project->website = $request->website;
            $project->local_mentor = $request->local_mentor;
            $project->external_mentor = serialize($request->external_mentors);
            $project->project_status = $request->project_status;
            $project->from_date = $request->from_date;
            $project->to_date = $request->to_date;
            $project->next_activity = $request->next_activity;

            $project_name = $request->project_name;
            $project_desc = $request->project_description;
            $project_from_date = $request->from_date;
            $project_to_date = $request->to_date;

            foreach ($first_array as $first) {
                $old_assignments[$first->mentor_id] = array(
                    'mentor_id' => $first->mentor_id,
                    'status' => $first->status,
                );
            }

            foreach ($request->external_mentors as $second) {
                $status = 'Pending';
                if (isset($old_assignments[$second]['status']) && $old_assignments[$second]['status'] != 'Pending') {
                    $status = $old_assignments[$second]['status'];
                }

                $new_assignments[$second] = array(
                    'mentor_id' => $second,
                    'status' => $status,
                );
            }

            $project->save();

            foreach ($request->external_mentors as $mentor_id) {

                $mentor_emails[] = DB::table('clients')
                    ->select(DB::raw('email'))
                    ->where('id', '=', $mentor_id)
                    ->first();
            }

            foreach ($mentor_emails as $mentor_email) {
                Mail::to($mentor_email->email)->send(new ProjectCreatedEmail($mentor_email->email, $project_name, $project_desc, $project_from_date, $project_to_date));
            }

        }

        Assignments::where('project_id', $id)->delete();

        foreach ($new_assignments as $mentor) {

            Assignments::firstOrCreate(
                [
                    'mentor_id' => $mentor['mentor_id'],
                    'project_id' => $id,
                    'status' => $mentor['status'],
                ]
            );
        }

        return redirect('admin/projects');
    }

    public function destroy(Request $request)
    {
        $project_id = $request->id;

        $project = new Projects();
        $project->destroy($project_id);

        Assignments::where('project_id', $project_id)->delete();

        return redirect('admin/projects');
    }

    public function match(Request $request)
    {

        $selected = $request->selected;

        $matches = [];

        if ($selected != '') {
            foreach ($selected as $skill) {
                $query = '"skill_' . $skill . '";s:5:"value";s:1:"1"';
                $queries[$skill] = $query;
                $replaced_query = str_replace("'", '', $query);
                $mentors = DB::table('clients')
                    ->where('skills', 'like', '%' . $replaced_query . '%')
                    ->where('status', '=', 'Active')
                    ->get();
            }

            foreach ($mentors as $mentor) {
//                    var_dump($mentor);
                //                    if(!in_array($mentor->id, $matches)){
                $matches[] = $mentor;
//                    }
            }
        }

        foreach ($matches as $match) {
            $skill_string = $match->skills;
//                echo $skill_string;
            foreach ($queries as $key => $q) {
//                    var_dump($q);
                if (strpos($skill_string, $q) === false) {
                    $match->missing[] = str_replace("_", " ", $key);
//                        echo $key .' not there for user '. $match->id. ' ';
                }
            }

//                var_dump($match);

        }
//        die();
        echo json_encode($matches);

    }

    public function match_local_mentor(Request $request)
    {

        $selected = $request->selected;
        $matches = [];

        if ($selected != '') {
            $mentors = DB::table('users')
                ->join('team_user', 'users.id', '=', 'team_user.user_id')
                ->where('team_user.team_id', $selected)
                ->whereNull('team_user.deleted_at')->get();

            foreach ($mentors as $mentor) {
                $matches[] = $mentor;
            }

            echo json_encode($mentors);
        }
    }

    public function fetch_timesheets(Request $request)
    {
        $data_result = [];
        $params = $request->all();

        $totalRecords = Timesheet::count();

        $data = DB::table('timesheets')
            ->offset($params['start'])
            ->where('project_id', $params['project_id'])
            ->limit($params['length'])
            ->get();

        foreach ($data as $d) {
            $project_id = ($d->project_id != '') ? $d->project_id : 0;
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

                    ',
            );
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data_result, // total data array
        );

        echo json_encode($json_data);
    }

    public function timesheet_store(Request $request)
    {
        Timesheet::create($request->all());

        return redirect('admin/projects');
    }

    public function timesheet_destroy(Request $request)
    {

        $id = $request->id;
        $timesheet = new Timesheet();
        $timesheet->destroy($id);

    }

    public function upload_team_image(Request $request)
    {

        $photo = $request->team_logo;
        $team_id = $request->team_id;
        $filename = $photo->store('public/assets/img/team_covers/' . $team_id);

        DB::table('teams')
            ->where('id', '=', $team_id)
            ->update([
                'team_logo' => $filename,
            ]);

        return redirect('/admin/user/team');
    }

}
