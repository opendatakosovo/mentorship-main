<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/12/2019
 * Time: 1:10 PM
 */

function get_mentor_name($id)
{
    $mentor =  DB::table('clients')
        ->select(DB::raw('name, lastname'))
        ->where('id', $id)
        ->first();

    if($mentor){
        return $mentor->name. ' '. $mentor->lastname;
    }

}

function get_local_mentor_name($id)
{

    $mentor = \App\User::find($id);

    if ($mentor) {
        return $mentor->name;
    }
}

function get_team_name($id)
{
    $team = \Litepie\User\Models\Team::find($id);

    if ($team) {
        return $team->name;
    }
}

function convert_to_json($data)
{
    $data_converted = unserialize($data);

    return json_encode($data_converted);
}

function convert_to_json_mentors($data)
{

    $data_converted = unserialize($data);
    $data = [];


    foreach ($data_converted as $d) {
        $mentor = \App\Client::find($d);
        if ($mentor) {
            $data[] = $mentor->name;
        }
    }

    return json_encode($data);
}

function get_project_name($id)
{
    $project = \App\Projects::find($id);

    if ($project) {
        return $project->project_name;
    }
}


function get_file_uploads($id)
{


    if (\File::exists(storage_path("app/certificates/".$id))) {
        $filesInFolder = \File::files(storage_path("app/certificates/".$id));

        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            $files[] = $file['filename'];
        }

        return $files;
    }


}



function is_superuser($email){

    $user =  DB::table('users')
        ->select(DB::raw('id'))
        ->where('email', $email)
        ->first();

    $user_id = $user->id;

    $user_role =
        DB::table('role_user')
        ->select(DB::raw('role_id'))
        ->where('user_id', $user_id)
        ->first();


    if($user_role->role_id == 1){
        return 'true';
    }
    else{
        return 'false';
    }

}

function get_projects_count($type){

    if($type == 'active'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->where('project_status', 'Active')
            ->first();

        return $count->count;
    }
    elseif($type == 'finnished'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->where('project_status', 'Finnished')
            ->first();

        return $count->count;
    }
    elseif($type == 'total'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->first();

        return $count->count;
    }

}

function get_timesheets_all(){
    $timeshets =  DB::table('timesheets')
        ->select(DB::raw('*'))
        ->get();

   return $timeshets;
}
function get_working_hours_all(){
    $count =  DB::table('timesheets')
        ->select(DB::raw('sum(hours) as count'))
        ->first();

    return $count->count;
}

function total_personal_projects($email,$type){

    $user = DB::table('clients')
        ->select(DB::raw('id'))
        ->where('email', $email)
        ->first();


    $user_id = $user->id;

    $count = 0;
    if($type == 'Active'){
        $projects =  DB::table('projects')
            ->select(DB::raw('*'))
            ->where('external_mentor','like',"%$user_id%")
            ->where('project_status',"Active")
            ->get();
    }else{
        $projects =  DB::table('projects')
            ->select(DB::raw('*'))
            ->where('external_mentor','like',"%$user_id%")
            ->get();
    }

    foreach($projects as $project){
        $projects_converted[] = array(
            "project" => $project->id,
            "mentors" => unserialize($project->external_mentor)
        );
    }

    foreach($projects_converted as $projecti){
        if(in_array($user_id,$projecti['mentors'])){
            $count = $count +1;
        }
    }

    return $count;
}


function personal_timesheets($email){

    $user = DB::table('clients')
        ->select(DB::raw('id'))
        ->where('email', $email)
        ->first();


    $user_id = $user->id;

    $timeshets =  DB::table('timesheets')
        ->select(DB::raw('*'))
        ->where('mentor_id',$user_id)
        ->get();

    return $timeshets;

}
