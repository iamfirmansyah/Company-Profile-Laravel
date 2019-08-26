<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsArtikel;

class CategoryNews extends Model
{
    protected $table = 'category_news';
    protected $fillable = [
        'category'
    ];

    public function newsCategory(){
        return $this->hasMany('App\NewsArtikel','category_id');
    }
}
