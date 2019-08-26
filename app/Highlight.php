<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsArtikel;

class Highlight extends Model
{
    protected $table = 'highlights';
    protected $fillable = [
        'category','style','text_style','button_style','image','news_id','link','title','description'
    ];

    public function news(){
        return $this->belongsTo('App\NewsArtikel','news_id');
    }
}
