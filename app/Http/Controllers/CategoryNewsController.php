<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryNews;

class CategoryNewsController extends Controller
{
    public function index(){
        $categs = CategoryNews::latest()->paginate(10);
        return view('dashboard.category-news',compact('categs'));
    }

    public function create(){
        return view('dashboard.create-category-news');
    }

    public function store(Request $request){
        $this->validate($request,[
            'category' => 'required|unique:category_news,category',        
        ]);

        $store = CategoryNews::create([
            'category' => $request->category
        ]);
        return redirect()->route('news-category')->with('success','Category Successfully Added');
    }

    public function delete($id){
        CategoryNews::where('id',$id)->delete();
        return back()->with('success','Category has deleted');
    }

    public function edit($id){
        $getCategory = CategoryNews::where('id',$id)->first();
        return view('dashboard.edit-category-news',compact('getCategory'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'category' => 'required'
        ]);

        $update = CategoryNews::where('id',$id)->update([
            'category' => $request->category
        ]);

        return redirect()->route('news-category')->with('success','Category Successfully Updated');
    }
}
