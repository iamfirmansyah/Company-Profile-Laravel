<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Highlight;
use App\NewsArtikel;
use Carbon\Carbon;

class HighlightController extends Controller
{
    public function index(){
        $highlights = Highlight::latest()->paginate(10);
        return view('dashboard.highlight',compact('highlights'));
    }

    public function create(){
        $news = NewsArtikel::all();
        return view('dashboard.create-highlight',compact('news'));
    }

    public function search(Request $request){
        $keyword = $request->keyword;       
        $highlights = Highlight::where('title','like','%'. $keyword . '%')    
        ->latest()->paginate(10);
        
        return view('dashboard.highlight',compact('highlights'));
    }

    public function searchDate(Request $request){
        $date1 = \Carbon\Carbon::parse($request->date1)->formatLocalized('%y-%m-%d 00:00:00');
        $date2 = \Carbon\Carbon::parse($request->date2)->formatLocalized('%y-%m-%d 00:00:00'); 

        $highlights = Highlight::whereBetween('created_at', array($date1, $date2))
        ->latest()->paginate(10);
        return view('dashboard.highlight',compact('highlights'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'image' => 'required',
            ]);
        $image = $request->file('image');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/highlight/'),$namafile);
        Highlight::create([
            'category' => $request->category,
            'style' => $request->style,
            'text_style' => $request->text_style,
            'button_style' => $request->text_style,
            'image' => $namafile,
            'news_id' => $request->news,
            'link' => $request->link,
            'title' => $request->title,
            'description' => $request->description
            ]);
            return redirect('/admin/highlight')->with('success','Highlight Successfully Added');
    }

    public function edit($id){
        $getHighlight = Highlight::where('id',$id)->first();
        // dd($getHighlight);
        $news = NewsArtikel::all();
        return view('dashboard.edit-highlight',compact('getHighlight','news'));
    }

    public function delete($id){
        $highlights = Highlight::where('id',$id)->get()->first();
        $image = $highlights->image;
        unlink(public_path('\upload\images\highlight\\'.$image));
        Highlight::where('id',$id)->delete();
        return back()->with('pesan','Highlight Successfully Deleted');
    }

    public function updateStatus($id){
        $status = Highlight::where('id',$id)->first();
        $stat = $status->status;
        // dd($status);
        if($stat == '0'){
            Highlight::where('id',$id)->update(['status' => 1]);
            return back()->with('success','Status are Active');
        }elseif($stat == "1"){
            Highlight::where('id',$id)->update(['status' => 0]);
            return back()->with('success','Status Not Active');
        }

    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            ]);
            
            $imageLama = $request->imageLama;
            $image = $request->file('image');
            if(!empty($image)){
                // dd($imageLama);
                $namaBaru = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('\upload\images\highlight'),$namaBaru);
                unlink(public_path('\upload\images\highlight\\').$imageLama);
            }else{
                $image = $imageLama;
                $namaBaru = $image;
            }

            Highlight::where('id',$id)->update([
                'category' => $request->category,
                'style' => $request->style,
                'text_style' => $request->text_style,
                'button_style' => $request->button_style,
                'image' => $namaBaru,
                'news_id' => $request->news,
                'link' => $request->link,
                'title' => $request->title,
                'description' => $request->description
                ]);
                return redirect('/admin/highlight')->with('success','Highlight Successfully Updated');                 
    }

}
