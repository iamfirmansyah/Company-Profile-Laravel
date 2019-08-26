<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Card;
use App\UserCard;
use App\Highlight;
use App\Category;
use App\NewsArtikel;
use Carbon\Carbon;

class HeaderController extends Controller
{

    public function index(){
        return view('homes');
    }                                     
    
    public function table(){
        $tables = UserCard::all();
        return view('admin.table',compact('tables'));
    }
            
    public function indexHighlight(){
        $highlights = Highlight::latest()->paginate(10);
        return view('admin.highlight',compact('highlights'));
    }
            
    public function deleteHighlight($id){
                $highlights = Highlight::where('id',$id)->get()->first();
        $foto = $highlights->foto;
        unlink(public_path('\upload\images\highlight\\'.$foto));
        Highlight::where('id',$id)->delete();
        return back()->with('pesan','Highlight berhasil di hapus');
    }
    public function editHighlight($id){
        $highlight = Highlight::where('id',$id)->first();
        return view('admin.edithighlight',compact('highlight'));
    }
    public function updateHighlight(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'status' => 'required',
            ]);
            
            $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
                $foto = $request->file('foto');
                $namaBaru = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('upload\images\updateHighlight'), $namaBaru);
                unlink(public_path('upload\images\highlight\\') . $fotoLama);
            } else{
                $foto = $fotoLama;
                $namaBaru = $foto;
            }

            Highlight::where('id',$id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'status' => $request->status,
                'foto' => $namaBaru,
                ]);
                
                return redirect('/admin/highlight')->with('pesan','Highlight berhasil diubah');
            }
            
            //CARD
            public function createCard(Request $request){
                $this->validate($request,[
            'title' => 'required',
            'foto' => 'required',
            ]);
            $foto = $request->file('foto');
            $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('upload/images/card'),$namafile);
            Card::create([
                'title' => $request ->title,
                'foto' => $namafile,
                ]);
                return redirect('/admin')->with('pesan','Card berhasil di ubah');
            }

        
        //HEADER
        public function edit($id){
            $headers = Header::where('id',$id)->first();
            return view('admin.editheader',compact('headers'));
        }
        
        public function update(Request $request,$id){
            $this->validate($request,[
                'title1' => 'required',
                'title2' => 'required',
                ]);
                Header::where('id',$id)->update([
                    'title1' => $request->title1,
                    'title2' => $request->title2,
                    ]);
                    return redirect('/admin')->with('pesan','Title Header berhasil di ubah');
                    
                    return back()->with('warning','Gagal');
                }
                
                public function indexHeader(){
                    // $headers = Header::orderBy('id','desc')->first();
                    // $cards = Card::orderBy('id','desc')->first();
                    // $categories = Category::all();
                    return view('admin.home'
                    // ,compact('headers','cards','categories')
                );
                }
                
    //CATEGORY
    public function createCategory(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        $cek = Category::where('category',$request->category)->count();
        if($cek > 0 ){
            return back()->with('warning','Kategori sudah dibuat silahkan buat kategori lain.');
        }else{
            Category::create([
                'category' => strtoupper($request->category)
            ]);
            return back()->with('pesan','Kategori berhasil dibuat');
        }
    }

    public function indexCategory(){
        return view('admin.home',compact('categories'));
    }

    public function deleteCategory($id){
        Category::where('id',$id)->delete();
        return back()->with('pesan','Kategori berhasil dihapus');
    }
    

  

}