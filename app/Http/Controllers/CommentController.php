<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content'=>'required'
        ]);


        Comment::create([
            'user_id' =>$request->user_id,
            'serie_id' => $request->serie_id,
            'content' => $request->content,
            'date' => now(),
        ]);
        // $serieID = App\Models\Serie::where('id',  $request->serie_id)

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //to validate form
        $this->validate($request, [
            'content'=>'required'
        ]);

        //store data in data base
        Comment::create ($request->all());
        return redirect()->route('singleSeriePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = comment::where('id',$id)->first();
        return view('comments.edit',array('comment' => $comment));
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
        $this->validate($request, [

            'id' => 'required|integer',
            'user_id' => 'required|integer',
            'serie_id' => 'required|integer',
           'content'=> 'required',
           'date'=> 'required|date',

         ]);

        $comment = Comment::find($id);
        $comment->id =  $request->input('id');
        $comment->user_id =  $request->input('user_id');
        $comment->serie_id =  $request->input('serie_id');
        $comment->content =  $request->input('content');
        $comment->date =  $request->input('date');

        $comment->save();

         return redirect()->route('manageCommentsPage')->with('info', 'Mise à jour effectuée avec succés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::where('id',$id)->first();
        $comment->delete();

    return back()->with('info', 'Suppression reussie ! :).');
    }
}
