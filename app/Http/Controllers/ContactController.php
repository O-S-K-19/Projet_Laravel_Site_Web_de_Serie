<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $msg='';
        return view('contacts.contact')->with('msg',$msg);
    }

    public function store(Request $request){
        //to validate form
        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'message'=>'required'
        ]);

        //store data in data base
        // Contact::create($request->all());

        //où vont etre envoyes les resultats de la requetes ???????????

        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'message'=> $request->message,
        ]);
       $msg = 'SUCCES !!!';
       //return view('contacts.contact')->with('msg',$msg);
        return redirect()->route('contactPage')->with('msg', $msg);
    }
}
