<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::latest()->paginate(10);
        return view('dashboard.project',compact('projects'));
    }

    public function create(){
        return view('dashboard.create-project');
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $division = $request->division;
        $location = $request->location;

        $projects = Project::where('project_name','like','%'. $keyword .'%')
                    ->orWhere('title','like','%'. $keyword .'%')
                    ->latest()->paginate(10);

        return view('dashboard.project',compact('projects'));
    }

    public function show(){
        $projects = Project::latest()->paginate(5);
        return view('homes.ourwork',compact('projects'));
    }

    public function detailProject($year,$month,$id,$slug){
        $getDetailProject = Project::where('id',$id)->first();
        // dd($getDetailProject);
        return view('homes.ourwork-detail',compact('getDetailProject'));
    }

    public function updateVisitCount(Request $request){
        $cek = $request->visit_count;
        $update = Project::where('id',$request->id)->update([
            'visit_count' => $request->visit_count + 1
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'project_name' => 'required|min:3',
            'image' => 'required|max:50000',
            'image_only1' => 'max:50000',
            'image_only2' => 'max:50000',
            'image_only3' => 'max:50000',
            'image_only4' => 'max:50000'
        ]);

        $image = $request->file('image');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/project'),$namafile);

        $image_only1 = $request->file('image_only1');
        if(!empty($image_only1)){
        $namafile_only1 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only1->getClientOriginalExtension();
        $image_only1->move(public_path('upload/images/project/image_only'),$namafile_only1);
        }else{
            $namafile_only1 = $image_only1;
        }

        $image_only2 = $request->file('image_only2');
        if(!empty($image_only2)){
        $namafile_only2 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only2->getClientOriginalExtension();
        $image_only2->move(public_path('upload/images/project/image_only'),$namafile_only2);
        }else{
            $namafile_only2 = $image_only2;
        }

        $image_only3 = $request->file('image_only3');
        if(!empty($image_only3)){
        $namafile_only3 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only3->getClientOriginalExtension();
        $image_only3->move(public_path('upload/images/project/image_only'),$namafile_only3);
        }else{
            $namafile_only3 = $image_only3;
        }
        
        $image_only4 = $request->file('image_only4');
        if(!empty($image_only4)){
        $namafile_only4 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only4->getClientOriginalExtension();
        $image_only4->move(public_path('upload/images/project/image_only'),$namafile_only4);
        }else{
            $namafile_only4 = $image_only4;
        }

        $image_only5 = $request->file('image_only5');
        if(!empty($image_only5)){
        $namafile_only5 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only5->getClientOriginalExtension();
        $image_only5->move(public_path('upload/images/project/image_only'),$namafile_only5);
        }else{
            $namafile_only5 = $image_only5;
        }

        $image_only6 = $request->file('image_only6');
        if(!empty($image_only6)){
        $namafile_only6 = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image_only6->getClientOriginalExtension();
        $image_only6->move(public_path('upload/images/project/image_only'),$namafile_only6);
        }else{
            $namafile_only6 = $image_only6;
        }

        Project::create([
            'project_name' => $request->project_name,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'image' => $namafile,
            'style' => $request->style,
            'text_style' => $request->text_style,
            'button_style' => $request->button_style,            
            'description_n' => $request->first_description,
            'image_only1' => $namafile_only1,
            'image_only2' => $namafile_only2,
            'image_only3' => $namafile_only3,
            'image_only4' => $namafile_only4,
            'image_only5' => $namafile_only5,
            'image_only6' => $namafile_only6,
        ]);

        return redirect()->route('project')->with('success','Project Successfully added');
    }

    public function edit($id){
        $getProject = Project::where('id',$id)->first();
        // dd($getProject);
        return view('dashboard.edit-project',compact('getProject'));
    }

    public function update(Request $request,$id){        

        $imageLama = $request->imageLama;
        // dd($imageLama);
            $image = $request->file('image');
            if(!empty($image)){
                $image = $request->file('image');
                unlink(public_path('\upload\images\project\\').$imageLama);
                $namaBaru = Carbon::now()->timestamp . '_' . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload\images\project'),$namaBaru);
            }else{
                $image = $imageLama;
                $namaBaru = $image;
            }


        $imageOnlyLama1 = $request->imageOnlyLama1;
        $image_only1 = $request->file('image_only1');
        if(!empty($image_only1)){
            $namaBaru_only1 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only1->getClientOriginalExtension();
            $image_only1->move(public_path('upload\images\project\image_only'),$namaBaru_only1);
            if(!empty($imageOnlyLama1)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama1);
            }else{
                
            }
        }else{
            $namaBaru_only1 = $imageOnlyLama1; 
        }

        $imageOnlyLama2 = $request->imageOnlyLama2;
        $image_only2 = $request->file('image_only2');
        if(!empty($image_only2)){
            $namaBaru_only2 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only2->getClientOriginalExtension();
            $image_only2->move(public_path('upload\images\project\image_only'),$namaBaru_only2);
            if(!empty($imageOnlyLama2)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama2);
            }else{
                
            }
        }else{
            $namaBaru_only2 = $imageOnlyLama2; 
        }

        $imageOnlyLama3 = $request->imageOnlyLama3;
        $image_only3 = $request->file('image_only3');
        if(!empty($image_only3)){
            $namaBaru_only3 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only3->getClientOriginalExtension();
            $image_only3->move(public_path('upload\images\project\image_only'),$namaBaru_only3);
            if(!empty($imageOnlyLama3)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama3);
            }else{
                
            }
        }else{
            $namaBaru_only3 = $imageOnlyLama3; 
        }

        $imageOnlyLama4 = $request->imageOnlyLama4;
        $image_only4 = $request->file('image_only4');
        if(!empty($image_only4)){
            $namaBaru_only4 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only4->getClientOriginalExtension();
            $image_only4->move(public_path('upload\images\project\image_only'),$namaBaru_only4);
            if(!empty($imageOnlyLama4)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama4);
            }else{
                
            }
        }else{
            $namaBaru_only4 = $imageOnlyLama4; 
        }

        $imageOnlyLama5 = $request->imageOnlyLama5;
        $image_only5 = $request->file('image_only5');
        if(!empty($image_only5)){
            $namaBaru_only5 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only5->getClientOriginalExtension();
            $image_only5->move(public_path('upload\images\project\image_only'),$namaBaru_only5);
            if(!empty($imageOnlyLama5)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama5);
            }else{
                
            }
        }else{
            $namaBaru_only5 = $imageOnlyLama5; 
        }
        $imageOnlyLama6 = $request->imageOnlyLama6;
        $image_only6 = $request->file('image_only6');
        if(!empty($image_only6)){
            $namaBaru_only6 = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image_only6->getClientOriginalExtension();
            $image_only6->move(public_path('upload\images\project\image_only'),$namaBaru_only6);
            if(!empty($imageOnlyLama6)){
                unlink(public_path('\upload\images\project\image_only\\').$imageOnlyLama6);
            }else{
                
            }
        }else{
            $namaBaru_only6 = $imageOnlyLama6; 
        }


        Project::where('id',$id)->update([
            'project_name' => $request->project_name,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'image' => $namaBaru,
            'style' => $request->style,
            'text_style' => $request->text_style,
            'button_style' => $request->button_style,            
            'description_n' => $request->first_description,
            'image_only1' => $namaBaru_only1,
            'image_only2' => $namaBaru_only2,
            'image_only3' => $namaBaru_only3,
            'image_only4' => $namaBaru_only4,
            'image_only5' => $namaBaru_only5,
            'image_only6' => $namaBaru_only6,
        ]);

        return redirect()->route('project')->with('success','Project Successfully Updated');
    }

    public function delete($id){
        $ambilfoto = Project::where('id',$id)->first();
        $image = $ambilfoto->image;
        $image_only1 = $ambilfoto->image_only1;
        $image_only2 = $ambilfoto->image_only2;
        $image_only3 = $ambilfoto->image_only3;
        $image_only4 = $ambilfoto->image_only4;
        $image_only5 = $ambilfoto->image_only5;
        $image_only6 = $ambilfoto->image_only6;
        unlink(public_path('\upload\images\project\\'.$image));
            
        if(!empty($image_only1)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only1));
            }else{
    
            }
        if(!empty($image_only2)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only2));
            }else{
    
            }
        if(!empty($image_only3)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only3));
            }else{
    
            }
        if(!empty($image_only4)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only4));
            }else{
    
            }
        if(!empty($image_only5)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only5));
            }else{
    
            }
        if(!empty($image_only6)){
                unlink(public_path('\upload\images\project\image_only\\'.$image_only6));
            }else{
    
            }
        // dd($image_r);
        Project::where('id',$id)->delete();
        return back()->with('success','Project Successfully Deleted');
    }
}
