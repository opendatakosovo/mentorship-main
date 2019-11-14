<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 11/12/2019
 * Time: 5:59 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $table = 'timesheets';

    protected $fillable = [
        'project_id','mentor_id','from_date','to_date','hours','created_by'
    ];
}