<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'full_name','job_name','division','location','foto','phone','email','linkedin','instagram','twitter','dribbble','behance','github','description','position'
    ];
}
