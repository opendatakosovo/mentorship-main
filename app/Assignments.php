<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 1/20/2020
 * Time: 11:07 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $table = 'assignments';

    protected $fillable = [
        'mentor_id','project_id','status'
    ];
}