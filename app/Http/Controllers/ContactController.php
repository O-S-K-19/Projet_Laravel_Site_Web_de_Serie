<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }

    public function contactForm(Request $request){
        //to validate form
        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'message'=>'required'
        ]);

        //store data in data base 
        // Contact::create($request->all());
        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'message'=> $request->message,

        ]);
        return redirect()->route('contactPage');
    }
}