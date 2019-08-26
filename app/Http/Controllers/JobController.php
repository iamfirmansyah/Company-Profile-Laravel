<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\CategoryCareer;

class JobController extends Controller
{
    public function index(){
        $datas = Job::latest()->paginate(10);
        return view('dashboard.job-list',compact('datas'));
    }

    public function career(){
        $career = Job::where('status','1')->orderBy('id','desc')->get();
        $location = Job::groupBy('location')->get();
        return view('homes.careers',compact('career','location'));
    }
    
    public function create(){
        return view('dashboard.create-job');
    }

    public function detailCareer($year,$month,$id,$slug){
        $detailCareer = Job::where('id',$id)->first();
        // dd($detailCareer);
        return view('homes.careers-detail',compact('detailCareer'));
    }

    public function updateVisitCount(Request $request){
        Job::where('id',$request->id)->update([
            'visit_count' => $request->visit_count + 1
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'job_title' => 'required|min:3',
            'location' => 'required|min:3',
            'division' => 'required',
            'location' => 'required',
            'description' => 'required|min:5',
        ]);
        
        $cari = [
            'job_title' => $request->job_title,
            'location' => $request->location
        ];

        $cek = Job::where($cari)->count();
            if($cek == 0){
            Job::create([
                'job_title' => $request->job_title,
                'location' => $request->location,
                'description' => $request->description,
                // 'status' => 
                'category' => $request->category,
                'division' => $request->division,
                'requirement' => $request->requirement,
                'year' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%Y'),
                'month' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%m'),
                'slug' => str_slug($request->job_title)
            ]);
            return redirect()->route('job')->with('Success','Job Successfully Created');
        }else{
            return back()->with('warning','Job already exist');
        }
    }

    public function search(Request $request){
        $cari = $request->career;
        $cari_location = $request->location_option;
        $location = Job::groupBy('location')->get();

        $career = Job::where("job_title","like",'%'.$cari."%")
        ->whereRaw("(location = '".$cari_location."')")
        ->get();
        return view('homes.careers',compact('career','location'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'job_title' => 'required|min:3',
            'location' => 'required|min:3',
        ]);
                Job::where('id',$id)->update([
                    'job_title' => $request->job_title,
                    'slug' => str_slug($request->job_title),                   
                    'division' => $request->division,
                    'location' => $request->location,
                    'description' => $request->description,
                    'requirement' => $request->requirement,
                    'year' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%Y'),
                    'month' => \Carbon\Carbon::parse($request->created_at)->formatLocalized('%m'),
                ]);
        
                return redirect()->route('job')->with('success','Job Successfully updated');
    }

    public function delete($id){
        Job::where('id',$id)->delete();
        return back()->with('success','Job Successfully deleted');
    }

    public function edit($id){
        $getJob = Job::where('id',$id)->first();
        return view('dashboard.edit-job',compact('getJob'));
    }

    public function updateStatus($id){
        // return 'helo';
        $status = Job::where('id',$id)->first()->status;
        $active = $status ;
        // dd($status);
        if($status == "0"){
            $tambah = Job::where('id',$id)->update(['status' => 1 ]);
            return back()->with('success','Job are Active');
        }elseif($status == "1"){
            $kurang = Job::where('id',$id)->update(['status' => 0 ]);
            return back()->with('success','Job not Active');
        }
    }

    public function searchJob(Request $request){
        $keyword = $request->keyword;
        $division = $request->division;
        $location = $request->location;

        $datas = Job::whereRaw("(division = '".$division."')")
                ->whereRaw("(location = '".$location."')")
                ->where('job_title','LIKE','%'.$keyword.'%')
                ->latest()->paginate(10);
        
        return view('dashboard.job-list',compact('datas'));
    }
    // public function searchJob(Request $request){

    //     $keyword = $request->keyword;

    //         $jobs = Job::where('job_title','LIKE','%'.$keyword.'%')
    //         ->latest()->paginate(10);

    //         $html = '';

    //         // dd($jobs);

    //         foreach ($jobs as $data) {
    //             $html .= '<div class="row m-1"><div class="col"><div class="card h-100"><div class="card-body"><div class="row align-items-center"><div class="col-8"><h3 class="mb-0">';
    //              $html .= $data->job_title;
    //              $html .= '</h3><h4 class="mt-3 text-muted">';
    //              $html .= $data->division;
    //              $html .= ' | ';
    //              $html .= $data->location;
    //              $html .= '</h4><h5 class="mt-3 text-muted">Total View : 1000</h5></div><div class="col-4"><div class="row d-flex  flex-row-reverse">';
    //              $html .= '<a href=" ' . route("edit-job",$data->id) . ' " class="mb-0 btn btn-link btn-sm">';
    //             $html .= '<i class="text-muted fas fa-pen fa-2x"></i>';
    //             $html .= '</a>';
    //             $html .= '<a href=" ' . route("delete-career",$data->id) .'" class="delete-career mb-0 btn btn-link btn-sm">';
    //             $html .= '<i class="text-muted fas fa-trash-alt fa-2x"></i>';
    //             $html .= '</a>';
    //             $html .= '</div>';
    //             $html .= '<div class="row float-right"><form action="' . route("update-status-job",$data->id) . '" method="POST"> '. csrf_field() . ' ';
    //             $html .= '<button class="';
    //             $html .= 'btn btn-status '. ($data->status == "0" ? "btn-outline-danger" : "btn-outline-success") .'';
    //             $html .= '"style="border-radius:50px;" type="submit">';
    //             $html .= $data->status == "0" ? "NOT ACTIVE" : "ACTIVE"; 
    //              '</button>';
    //             $html .= '</form></div></div></div></div></div></div></div>';
    //         }

    //         return $html;
    //         // return json_encode($jobs);
    // }


}
