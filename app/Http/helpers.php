<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/12/2019
 * Time: 1:10 PM
 */

function get_mentor_name($id)
{
    $mentor = \App\Client::find($id);

    if ($mentor) {
        return $mentor->name . ' ' . $mentor->lastname;
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
