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

    if($id){
        $mentor = \App\User::find($id);

        if ($mentor) {
            return $mentor->name;
        }
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
    var_dump($data_converted);
$data = [];


    foreach ($data_converted as $d) {
        $mentor = \App\Client::find($d);

        if ($mentor) {
            $data = array(
                $d => $mentor->name
            );

        }
    }

    return json_encode($data);
}

function get_project_name($id)
{
    $project = \App\Projects::find($id);

    if ($project) {
        return $project->project_name;
    }else{
        return 'Project Deleted';
    }
}


function get_project_reports_name($id){

    $project =  DB::table('projects')
        ->select(DB::raw('project_name'))
        ->where('project_id', $id)
        ->first();

    if ($project) {
        return $project->project_name;
    }else{
        return 'Project Deleted';
    }
}
function get_file_uploads($id)
{


    if (\File::exists(storage_path("app/certificates/".$id))) {
        $filesInFolder = \File::files(storage_path("app/certificates/".$id));

        if($filesInFolder){
            foreach ($filesInFolder as $path) {
                $file = pathinfo($path);
                $files[] = $file['filename'];
            }

            return $files;
        }

    }


}

function get_cv_uploads($email)
{


    if (\File::exists(storage_path("app/cv/".$email))) {
        $filesInFolder = \File::files(storage_path("app/cv/".$email));

        if($filesInFolder){
            foreach ($filesInFolder as $path) {
                $file = pathinfo($path);
                $files[] = $file['filename'];
            }

            return $files;
        }

    }


}
function get_team_image_uploads($id)
{

    if($id){
    $image_name = DB::table('teams')
        ->select(DB::raw('team_logo'))
        ->where('id', $id)
        ->first();

        return $image_name->team_logo;
    }

}

function get_user_id($email){

    $user =  DB::table('clients')
        ->select(DB::raw('id'))
        ->where('email', $email)
        ->first();
    $user_id = $user->id;

    return $user_id;
}
function is_superuser($email){


    $user =  DB::table('users')
        ->select(DB::raw('id'))
        ->where('email', $email)
        ->first();


    if($user != null){
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


}

function is_admin($email){
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


    if($user_role->role_id == 2){
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

//OWN
function get_projects_count_own($partner_member, $type){


    $user =  DB::table('users')
        ->select(DB::raw('id'))
        ->where('email', $partner_member)
        ->first();

    $user_id = $user->id;

    $team_id = DB::table('team_user')
        ->select(DB::raw('team_id'))
        ->where('user_id', $user_id)
        ->first();

    if($type == 'active'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->where('project_status', 'Active')
            ->where('team_id', $team_id->team_id)
            ->first();

        return  $count->count;

    }
    elseif($type == 'finnished'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->where('project_status', 'Finnished')
            ->where('team_id', $team_id->team_id)
            ->first();

        return $count->count;
    }
    elseif($type == 'total'){
        $count =  DB::table('projects')
            ->select(DB::raw('count(*) as count'))
            ->where('team_id', $team_id->team_id)
            ->first();

        return $count->count;
    }

}

function get_timesheets_all(){

    $timeshets =  DB::table('timesheets')
        ->select(DB::raw('*'))
        ->get();

//    var_dump($timeshets);
//    die();
   return $timeshets;
}
function get_timesheets_all_own($partner_member){

    $team_id = DB::table('team_user')
        ->select(DB::raw('team_id'))
        ->where('user_id', user()->id)
        ->first();

    $user =  DB::table('users')
        ->select(DB::raw('id'))
        ->where('email', $partner_member)
        ->first();

    $user_id = $user->id;

    $timeshets =  DB::table('timesheets')
        ->select(DB::raw('*,projects.id as project_id'))
        ->join('projects', 'projects.id', '=', 'timesheets.project_id')
        ->where('projects.team_id', $team_id->team_id)
        ->get();


    return $timeshets;
}
function get_working_hours_all(){
    $count =  DB::table('timesheets')
        ->select(DB::raw('sum(hours) as count'))
        ->first();

    return $count->count;
}

function get_working_hours_all_own($partner_member){
    $user =  DB::table('users')
        ->select(DB::raw('id'))
        ->where('email', $partner_member)
        ->first();

    $user_id = $user->id;

    $team_id = DB::table('team_user')
        ->select(DB::raw('team_id'))
        ->where('user_id', $user_id)
        ->first();

    $count =  DB::table('timesheets')
        ->select(DB::raw('sum(hours) as count'))
        ->join('projects', 'projects.id', '=', 'timesheets.project_id')
        ->where('projects.team_id', $team_id->team_id)
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

    if(isset($projects_converted)){
        foreach($projects_converted as $projecti){
            if(in_array($user_id,$projecti['mentors'])){
                $count = $count +1;
            }
        }
        return $count;
    }else{
        return 0;
    }



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


function get_host(){
    return 'https://mentorship4youth.net';
}


function get_partners(){



    $partners = DB::table('teams')
        ->select(DB::raw('teams.id , team_logo'))
        ->join('projects', 'projects.team_id', '=', 'teams.id')
        ->groupBy('name')
        ->get();

    return $partners;
}

function get_cities (){
  $cities = array(
      "Prishtine",
      "Peje",
      "Prizren",
      "Gjakove",
      "Decan",
      "Mitrovice",
      "Ferizaj",
      "Gjilan",
      "Skenderaj",
      "Kline",
      "Podujeve",
      "Lipjan",
      "Drenas",
      "Suhareke",
      "Vushtrri",
      "Malisheve",
      "Istog",
      "Dragash",
      "Shtime",
      "Obiliq",
      "Leposaviq",
      "Kamenice",
      "Viti",
      "Rahovec",
      "Gracanice",
      "Zvecan",
      "Zubin Potok",
      "Junik",
      "Fushe Kosove",
      "Mitrovice Veriore",
      "Hani i Elezit",
      "Novoberde",
      "Shterpce",
        ) ;
  return $cities;
}

function get_languages(){
   $languages = array(
       "Albanian",
       "English",
       "Serbian",
       "Turkish",
       "Croatian",
       "Bulgarian",
       "German",
       "Spanish",
       "Portuguese",
       "Chinese",
       "Arabic",
       "Hindi",
       "Russian",
       "Japanese",
       "French",

   );
       return $languages;
}

function get_skills(){

    $skills = \App\Skills::all();

    return $skills;
}


function get_projects(){
    $projects  =  \App\Projects::where('project_status','active')->get();


    return $projects;
}