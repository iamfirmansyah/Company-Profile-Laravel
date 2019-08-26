<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsArtikel;

class Releaser extends Model
{
    protected $table = 'releasers';
    protected $fillable = [
        'releaser','foto'
    ];

    public function newsReleaser(){
        return $this->hasMany(NewsArtikel::class,'releaser_id');
    }
}
