<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('homes.contact');
    }

    public function indexData(){
        $contacts = Contact::where('topic','career')->latest()->paginate(7);
        $countC = Contact::groupBy('topic')->where('topic','career')->count();
        $countP = Contact::groupBy('topic')->where('topic','partnership')->count();
        $latestMessages = Contact::latest()->get();
        return view('dashboard.all-mails',compact('contacts','countP','countC','latestMessages'));
    }
    
    public function showPartner(){
        $countC = Contact::groupBy('topic')->where('topic','career')->count();
        $countP = Contact::groupBy('topic')->where('topic','partnership')->count();
        $contacts = Contact::where('topic','partnership')->latest()->paginate(7);
        $latestMessages = Contact::latest()->get();
        return view('dashboard.mail-partnership',compact('contacts','latestMessages','countC','countP'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'topic' => 'required',
            'messages' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'topic' => $request->topic,
            'messages' => $request->messages,
        ]);

        return back()->with('success','Sending Messages');

    }

    public function updateReadCount(Request $request){
        $update = Contact::where('id',$request->id)->update([
            'read_count' => $request->read_count + 1
        ]);
    }

    public function delete($id){
        $usercards = Contact::where('id',$id)->get()->first();        
        Contact::where('id',$id)->delete();
        return back()->with('success','Member Successfully deleted');
    }

}
