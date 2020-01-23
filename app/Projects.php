<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'project_id','from_date','to_date','project_name','project_description','team_id','matching_skills','place','local_mentor','external_mentor','project_status','next_activity','website'
    ];
}
