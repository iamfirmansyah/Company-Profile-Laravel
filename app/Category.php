<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category',
        'counter'

    ];

    public function artikel(){
        return $this->hasMany(Artikel::class,'category_id');
    }
}
