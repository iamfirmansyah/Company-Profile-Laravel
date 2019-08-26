<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_title','slug','division','location','year','status','month','description','requirement','visit_count'
    ];
}
