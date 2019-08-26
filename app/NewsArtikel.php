<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Highlight;
use App\Releaser;
use App\CategoryNews;

class NewsArtikel extends Model
{
    protected $table = 'news_artikels'; 
    protected $fillable=[
        'title','category','releaser','foto','news_detail','writer','slug','year','month','visit_count',
        'category_id','releaser_id'
    ];

    public function highlight(){
        return $this->hasOne('App\Highlight','news_id');
    }

    public function category(){
        return $this->belongsTo('App\CategoryNews','category_id');
    }

    public function releaser(){
        return $this->belongsTo('App\Releaser','releaser_id');
    }
}
