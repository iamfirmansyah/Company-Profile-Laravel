<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        $data = User::latest()->paginate(10);
        return view('dashboard.set-admin',compact('data'));
    }

    public function indexSetting($name){
        $getProfile = User::where('name',$name)->first();
        return view('dashboard.setting',compact('getProfile'));
    }

    public function search(Request $request){
        $keyword = $request->keyword;

        $data = User::where('name','like','%'. $keyword .'%')
                    ->latest()->paginate(10);

        return view('dashboard.set-admin',compact('data'));
    }

    public function updateSetting(Request $request,$name){
        $this->validate($request,[
            // 'old_password' => 'confirmed',
            'confirm_new_password' => 'same:new_password'
        ]);

        $imageLama = $request->imageLama;
        $image = $request->file('image');
        if(!empty($image)){
            if($imageLama == null){
                
            }else{                
                unlink(public_path('upload\images\adminProfile\\').$imageLama);
            } 
            $namaBaru = Carbon::now()->timestamp. '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload\images\adminProfile'),$namaBaru);
        }else{
            $image = $imageLama;
            $namaBaru = $image;
        }

        // dd($image);

        $hashPassword = Auth::user()->password;

        if($request->old_password == ''){
            $newPass = $hashPassword;
                $update = User::where('name',$name)->update([
                    'password' => $newPass,
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $namaBaru
                ]);
                // dd($request->email);
                return redirect()->route('setting',$request->name)->with('success','Profile Changes');
        }else{

            
                if(Hash::check($request->old_password,$hashPassword)){
                    $update = User::where('name',$name)->update([
                        'password' => Hash::make($request->new_password),
                        'name' => $request->name,
                        'email' => $request->email,
                        'image' => $namaBaru,
                    ]);
                    
                    // dd($request->email);
                    return redirect()->route('setting',$request->name)->with('success','Profile Changes');
                }else{
                    return back()->with('warning','Current Password does not matches');
                }
            
        }

    }

    public function create(){
        return view('dashboard.create-admin');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:users,name|max:255',
            'email' => 'required|unique:users,email',
            'image' => 'required|max:50000',
            'password' => 'required|min:6',
        ]);
        
        // dd($request->name);

        $image = $request->file('image');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/adminProfile/'),$namafile);

        $role = 'admin';

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $namafile,
            'password' => Hash::make($request->password),
            'role' => $role,
        ]);

        return redirect()->route('set-admin')->with('success','Admin Successfully Added');
    }

    public function delete($id){
        $ambil = User::where('id',$id)->first();
        $image = $ambil->image;
            unlink(public_path('\upload\images\adminProfile\\').$image);
            User::where('id',$id)->delete();
            return back()->with('success','Admin Successfully Deleted');
    }

    public function edit($id){
        $getAdmin = User::where('id',$id)->first();
        return view('dashboard.edit-admin',compact('getAdmin'));
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|max:50000',
        ]);
        // img
        $imageLama = $request->imageLama;
        $image = $request->file('image');

        if(!empty($image)){
            $namaBaru = Carbon::now()->timestamp . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('\upload\images\adminProfile'),$namaBaru);
            if(empty($imageLama)){
                
            }else{                
                unlink(public_path('\upload\images\adminProfile\\').$imageLama);
            }
        }else{
            $image = $imageLama;
            $namaBaru = $image;
        }
        // create
        $ambil = User::where('id',$id)->first();
        $pass = $ambil->password;

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $namaBaru,
            'password' => $pass,
            'role' => 'admin',
        ]);

        return redirect()->route('set-admin')->with('success','Admin Successfully Updated');
    }

}
