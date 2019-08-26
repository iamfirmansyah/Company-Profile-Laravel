<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Releaser;

class ReleaserController extends Controller
{
    public function index(){
        $releasers = Releaser::latest()->paginate(10);
        return view('dashboard.releaser-news',compact('releasers'));
    }

    public function create(){
        return view('dashboard.create-releaser-news');
    }

    public function store(Request $request){
        $this->validate($request,[
            'releaser' => 'required|unique:releasers,releaser',        
        ]);

        $foto = $request->file('foto');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('upload/images/releasers'),$namafile);  
        dd($namafile);
        $store = Releaser::create([
            'releaser' => $request->releaser,
            'foto' => $namafile
        ]);
        return redirect()->route('news-releaser')->with('success','Releaser Successfully Added');
    }

    public function delete($id){
        $releasers = Team::where('id',$id)->get()->first();
        Releaser::where('id',$id)->delete();
        $foto = $releasers->foto;
            unlink(public_path('upload\images\releasers\\'.$foto));
        return back()->with('success','Releaser has deleted');
    }

    public function edit($id){
        $getReleaser = Releaser::where('id',$id)->first();
        return view('dashboard.edit-releaser-news',compact('getReleaser'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'releaser' => 'required'
        ]);

        $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
            $foto = $request->file('foto');
            $namaBaru = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('upload\images\releasers'),$namaBaru);
            unlink(public_path('upload\images\releasers\\') .$fotoLama);
            }else{
             $foto = $fotoLama;
             $namaBaru = $foto;
            }

        $update = Releaser::where('id',$id)->update([
            'releaser' => $request->releaser,
            'foto' => $namaBaru
        ]);

        return redirect()->route('news-releaser')->with('success','Releaser Successfully Updated');
    }
}
