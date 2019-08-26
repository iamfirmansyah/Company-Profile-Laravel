<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name','title','image','image_only5','image_only6','description_n','slug','style','text_style','button_style','image_only1','image_only2','image_only3','image_only4','visit_count'
    ];
}
