<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table = 'mentor_certificates';

    protected $fillable = [
        'mentor_id','filename'
    ];
}
