<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Highlight;
use App\NewsArtikel;
use App\Project;
use App\Team;

class PageController extends Controller
{
    public function home(){
        $highlights = Highlight::where('status','1')->orderBy('id','DESC')->get();
        $projects = Project::latest()->paginate(3);
        $teams = Team::where('job_name','ceo')->paginate(1);
        return view('homes',compact('highlights','projects','teams'));
    }
    
    public function about(){
        $master = Team::where('position','master')->latest()->paginate(3);
        $teams = Team::where('position','normal')->orderBy('id','asc')->get();
        return view('homes.about',compact('teams','master'));
    }

    public function news(){
        $latests = NewsArtikel::latest()->paginate(2);
        $data = NewsArtikel::all();
        $kategori = NewsArtikel::groupBy('category_id')->get();
        $artikels = NewsArtikel::latest()->paginate(6);
        $archive = NewsArtikel::groupBy('month')->get();
        $archiveYear = NewsArtikel::groupBy('year')->get();
        $highlights = Highlight::where('status','1')->orderBy('id','DESC')->get();
        return view('content.news',compact('archiveYear','highlights','kategori','latests','artikels','data', 'archive'));
    }
}

