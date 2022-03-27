<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$series = Serie::orderBy('title','asc')->paginate(3); Pour Pagination et ajouter ça apres la boucle dans la vue : {{ $series->links() }}
        $series = Serie::all();
        return view('series.all', ['series' => $series]);
        //return view('series.all')->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
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

           'author_id'=> 'required',
            //$table->mediumText('authors');
           'title'=> 'required',
           'content'=> 'required',
           /*
           'actors'=> 'required',
           'category'=> 'required',
            'tags'=> 'required',
           'status'=> 'required',
           'year'=> 'required',
           'image'=> 'required',
           'movie'=> 'required',
            */
        ]);
        // Create serie
        /*
        $serie = new Serie;
        $serie->author_id
        $serie->title
        $serie->content
        */
        /*
        $serie->actors
        $serie->
        $serie->
        $serie->category
        $serie->tags
        $serie->status
        $serie->year
        $serie->image
        $serie->movie
        $serie->
        */







        return 'SUCCES !';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($serie_url) {
        $serie = Serie::where('url', $serie_url)->first();
        $comments = Comment::all();
        return view('series.single',array(
            'serie' => $serie,
            'comments'=> $comments,
));






        //return view('series.single',['serie' => $serie]);
        //return view('series.single')->with('serie',$serie);


        }

        public function getComment(Request $request){
            //    dd($request->Comment::find(1));

                $this->validate($request, [
                    'content'=>'required',
                ]);

                // DB::insert('insert into comments (content) values (?)', [$request->content]);

                // $request-> $serie()->$comment()-> create([
                //     'content'=> $request->content
                // ]);
                Comment::create([
                    'author_id' => $request->auth()->id(), // il faut changer auth() par USER() par la suite... ou faire reference  l'auteur du commentaire
                    'serie_id' => $request->singleSeriePage,
                    'content'=> $request->content,
                ]);
                return redirect()->route('homePage');
            }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($serie_url)
    {
        $serie = Serie::where('url',$serie_url)->first();
        return view('series.edit',array('serie' => $serie));
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
        return 'Mise à Jour';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Supprimer';
    }
}
