<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsArtikel;
use Carbon\Carbon;
use App\Highlight;
use App\CategoryNews;
use App\Releaser;

class NewsArtikelController extends Controller
{

    public function index(){
        $news = NewsArtikel::latest()->paginate(10);
        $categories = CategoryNews::all();
        $releasers = Releaser::all();
        return view('dashboard.news',compact('news','releasers','categories'));
    }

    public function create(){
        $categories = CategoryNews::all();
        $releasers = Releaser::all();
        return view('dashboard.create-news',compact('categories','releasers'));
    }

    public function searchArtikel(Request $request){
        $categories = CategoryNews::all();
        $releasers = Releaser::all();
        $category = $request->category;
        $releaser = $request->releaser;        

        $news = NewsArtikel::whereRaw("(category_id = ".$category.")")
                ->whereRaw("(releaser_id = ".$releaser.")")                
                ->latest()->paginate(10);
                return view('dashboard.news',compact('news','categories','releasers'));

    }

    public function searchDateArtikel(Request $request){
        $categories = CategoryNews::all();
        $releasers = Releaser::all();     

        $date1 = \Carbon\Carbon::parse($request->date1)->formatLocalized('%y-%m-%d 00:00:00');
        $date2 = \Carbon\Carbon::parse($request->date2)->formatLocalized('%y-%m-%d 00:00:00');

        $news = NewsArtikel::whereBetween('created_at', array($date1, $date2))
                ->latest()->paginate(10);
                return view('dashboard.news',compact('news','categories','releasers'));
    }

    public function updateVisitCount(Request $request){
        $update = NewsArtikel::where('id',$request->id)->update([
            'visit_count' => $request->visit_count + 1
        ]);
    }

    public function indexNews(){
        $latests = NewsArtikel::latest()->paginate(2);
        $data = NewsArtikel::all();
        $kategori = NewsArtikel::groupBy('category')->get();
        $hitpublic = NewsArtikel::where('category','Publication')->count();
        $hitevent = NewsArtikel::where('category','Event')->count();
        $hitnews = NewsArtikel::where('category','News')->count();
        $hitlaunching = NewsArtikel::where('category','Launching')->count();
        $artikels = NewsArtikel::latest()->paginate(6);
        $archive = NewsArtikel::groupBy('month')->get();
        $archiveYear = NewsArtikel::groupBy('year')->get();
        return view('content.news',compact('archiveYear','hitpublic','hitevent','hitnews','hitlaunching','kategori','latests','categories','artikels','data', 'archive'));
    }

    public function createArtikel(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'writer'=>'required',
            'foto' => 'required',
            'news_detail' => 'required'
        ]);
                $foto = $request->file('foto');
                $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('upload/images/news'),$namafile);

                NewsArtikel::create([
                    'title' => $request->title,
                    'category_id' =>$request->category,
                    'releaser_id' => $request->releaser,
                    'foto' => $namafile,
                    'slug' => str_slug($request->title),
                    'writer' => $request->writer,
                    'news_detail' => $request->news_detail,
                    'year' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%Y'),
                    'month' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%m'),
                ]);
                return redirect()->route('news-view')->with('success','News Successfully Added');
    
    }
    
    
    public function indexDetailArtikel($year,$month,$id,$slug){
        $artikel = NewsArtikel::where('id',$id)->first();
        $latests = NewsArtikel::latest()->paginate(2);
        $categories = CategoryNews::all();
        $archiveMonth = NewsArtikel::groupBy('month')->get();
        $archiveYear = NewsArtikel::groupBy('year')->get();
        $kategori = NewsArtikel::groupBy('category_id')->get();
        $news = NewsArtikel::all();
        $count = NewsArtikel::where('category_id')->count();
        return view('content.newsartikel',compact('kategori','count','archiveMonth','archiveYear','artikel','latests','categories'));
    }

    public function categoryArtikel($id,$year,$month,$category){
        $latests = NewsArtikel::latest()->paginate(2);
        // $takeCategory = Category::all();     
        $namecategory = NewsArtikel::where('category_id',$category)->groupBy('category_id')->get();
        $artikel = NewsArtikel::where('category_id',$category)->latest()->paginate(6);
        $archiveMonth = NewsArtikel::groupBy('month')->get();
        $archiveYear = NewsArtikel::groupBy('year')->get();
        $kategori = NewsArtikel::groupBy('category_id')->get();
        $highlights = Highlight::where('status','1')->orderBy('id','desc')->get();
        return view('content.news-category',compact('highlights','namecategory','kategori','archiveMonth','archiveYear','latests','artikel','category'))->with('warning','Tidak menemukan Artikel.. silahkan cari artikel lain :)');
    }

    public function indexArchiveArtikel($year,$month){
        $artikel = NewsArtikel::all();
        $archive = NewsArtikel::latest()->where('month',$month)->where('year',$year)->paginate(6);
        $ambilarchive = NewsArtikel::where('month',$month)->where('year',$year)->groupBy('month','year')->first();
        // $categories = Category::all();
        $latests = NewsArtikel::latest()->paginate(2);
        $kategori = NewsArtikel::groupBy('category_id')->get();
        $archiveMonth = NewsArtikel::groupBy('month')->get();
        $archiveYear = NewsArtikel::groupBy('year')->get();
        $highlights = Highlight::where('status','1')->orderBy('id','desc')->get();
        return view('content.news-time',compact('latests','highlights','kategori','ambilarchive','archiveMonth','archive','archiveYear'));
    }

    public function deleteNews($id){
        $artikel = NewsArtikel::where('id',$id)->get()->first();
        $foto = $artikel->foto;
        unlink(public_path('\upload\images\news\\'.$foto));
        NewsArtikel::where('id',$id)->delete();
        return back()->with('success','News Successfully Deleted');
    }

    public function editNews($id){
        $getNews = NewsArtikel::where('id',$id)->first();
        $categories = CategoryNews::all();
        $releasers = Releaser::all();
        return view('dashboard.edit-news',compact('getNews','categories','releasers'));
    }

    public function updateNews(Request $request,$id){
        
            $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
                $foto = $request->file('foto');
                $namaBaru = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('upload\images\news'),$namaBaru);
                unlink(public_path('\upload\images\news\\').$fotoLama);
            }else{
                $foto = $fotoLama;
                $namaBaru = $foto;
            }

            NewsArtikel::where('id',$id)->update([
                    'title' => $request->title,
                    'category_id' =>$request->category,
                    'releaser_id' => $request->releaser,
                    'foto' => $namaBaru,
                    'slug' => str_slug($request->title),
                    'writer' => $request->writer,
                    'news_detail' => $request->news_detail,
                    'year' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%Y'),
                    'month' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%m'),
            ]);
                return redirect()->route('news-view')->with('success','Artikel Successfully Updated');

        // }



    }
}