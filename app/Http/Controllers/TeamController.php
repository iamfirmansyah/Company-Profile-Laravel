<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Carbon\Carbon;

class TeamController extends Controller
{
    public function index(){
        return view('homes.about');
    }

    public function adminIndex(){
        $teams = Team::latest()->paginate(10);
        $divisions = Team::groupBy('division')->get();
        $locations = Team::groupBy('location')->get();
        return view('dashboard.team',compact('teams','divisions','locations'));
    }

    public function create(){
        return view('dashboard.create-team');
    }

    public function search(Request $request){
        $keyword = $request->keyword;        
        $location = $request->location;
        $division = $request->division;
        $divisions = Team::groupBy('division')->get();
        $locations = Team::groupBy('location')->get();
    
        $teams = Team::whereRaw("(division = '".$division."')")
                 ->whereRaw("(location = '".$location."')")
                 ->where('full_name','LIKE','%'.$keyword.'%')
                 ->latest()->paginate(10);
        return view('dashboard.team',compact('teams','divisions','locations'));
    }

    public function store(Request $request){
                
        $this->validate($request,[
            'full_name' => 'required|min:3',
            'job_name' => 'required',
            'division' => 'required',
            'location' => 'required',
            ]);
            // . '_' . uniqid() . '.'
            $foto = $request->file('foto');
            $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('upload/images/team'),$namafile);
            $phone = $request->phone;
            $satu = '+62'.$phone;  
        Team::create([
            'full_name' => $request->full_name,
            'job_name' => $request->job_name,
            'division' => $request->division,
            'position' => $request->position,
            'location' => $request->location,
            'foto' => $namafile,
            'phone' => $satu,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'dribbble' => $request->dribbble,
            'behance' => $request->behance,
            'github' => $request->github,
            'description' => $request->description,
            ]);
            return redirect()->route('team')->with('success','Member Successfully Added');

        }

        public function update(Request $request,$id){            

            $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
            $foto = $request->file('foto');
            $namaBaru = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('upload\images\team'),$namaBaru);
            unlink(public_path('upload\images\team\\') .$fotoLama);
            }else{
             $foto = $fotoLama;
             $namaBaru = $foto;
            }
            
            $satu = '+62' . $request->phone;

            Team::where('id',$id)->update([
            'full_name' => $request->full_name,
            'job_name' => $request->job_name,
            'division' => $request->division,
            'position' => $request->position,
            'location' => $request->location,
            'foto' => $namaBaru,
            'phone' => $satu,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'dribbble' => $request->dribbble,
            'behance' => $request->behance,
            'github' => $request->github,
            'description' => $request->description,
            ]);
            return redirect()->route('team')->with('success','Member Successfully updated');

        }

        public function edit($id){
            $getTeam = Team::where('id',$id)->first();
            return view('dashboard.edit-team',compact('getTeam'));
        }

        public function delete($id){
            $usercards = Team::where('id',$id)->get()->first();
            $foto = $usercards->foto;
            unlink(public_path('upload\images\team\\'.$foto));
            Team::where('id',$id)->delete();
            return back()->with('success','Member Successfully deleted');
        }

}
