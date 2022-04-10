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
        Contact::create ($request->all());
        $msg = 'Your message has been recorded, we will respond as soon as possible.';
        return redirect()->route('contactPage')->with('msg', $msg);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id',$id)->first();
        $contact->delete();

    return back()->with('info', 'Suppression reussie ! :).');
    }
}
