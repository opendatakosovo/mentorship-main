<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AssignmentsController extends Controller
{
    public function update(Request $request){

        $mentor_id = $request->mentor_id;
        $project_id = $request->project_id;
        $status = $request->status;


        DB::table('assignments')
            ->where('mentor_id', $mentor_id)
            ->where('project_id', $project_id)
            ->update(['status' => $status]);

        return redirect('/client');


    }
}
