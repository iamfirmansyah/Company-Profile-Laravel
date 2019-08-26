<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Career;

class CategoryCareer extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable =[
        'name_category'
    ];

    public function Career()
    {
        return $this->hasMany('App\Career','category_career_id');
    }
}
