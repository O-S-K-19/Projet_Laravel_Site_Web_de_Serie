<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Comment;
use Illuminate\Http\Request;
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
        //$series = Serie::orderBy('title','asc'); Pour Pagination et ajouter ça apres la boucle dans la vue : {{ $series->links() }}
        $series = Serie::paginate(5);
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

            'user_id' => 'required|integer',
            'serie_maker' => 'required|string|max:255',
           'title'=> 'required|string|max:255',
           'content'=> 'required',
           'actors'=> 'required|string|max:255',
           'category'=> 'required',
           //'url'=> 'required',
           'year'=> 'required|date',
           'status'=> '',
           //'image'=> 'required',
           //'movie'=> 'required',

        ]);

        // Create serie
        //Serie::create($request->all());

        $serie = new Serie();

        $serie->user_id =  $request->input('user_id');
        $serie->serie_maker =  $request->input('serie_maker');
        $serie->title =  $request->input('title');
        $serie->content =  $request->input('content');
        $serie->actors =  $request->input('actors');
        $serie->category =  $request->input('category');
        $serie->url = urlencode( $request->input('title'));
        $serie->year =  $request->input('year');
        //$serie->status =  $request->input('title');
        $serie->image =  $request->input('image');
        $serie->movie =  $request->input('movie');

        $serie->save();


        return redirect()->route('manageSeriesPage')->with('info', 'La serie a bien été ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($serie_url) {
        $serie = Serie::where('url', $serie_url)->first();
        $allComments = Comment::all();

        return view('series.single',array(
            'serie' => $serie,
            'comments'=> $allComments,
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
                    'author_id' => $request->auth()->id, // il faut changer auth() par USER() par la suite... ou faire reference  l'auteur du commentaire
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
       //return $request;


        $this->validate($request, [

            'user_id' => 'required|integer',
            'serie_maker' => 'required|string|max:255',
           'title'=> 'required|string|max:255',
           'content'=> 'required',
           'actors'=> 'required|string|max:255',
           'category'=> 'required',
           //'url'=> 'required',
           'year'=> 'required|date',
           'status'=> '',
           //'image'=> 'required',
           //'movie'=> 'required',
         ]);

        $serie = Serie::find($id);
        $serie->user_id =  $request->input('user_id');
        $serie->serie_maker =  $request->input('serie_maker');
        $serie->title =  $request->input('title');
        $serie->content =  $request->input('content');
        $serie->actors =  $request->input('actors');
        $serie->category =  $request->input('category');
        $serie->url = urlencode( $request->input('title'));
        $serie->year =  $request->input('year');
        //$serie->status =  $request->input('title');
        $serie->image =  $request->input('image');
        $serie->movie =  $request->input('movie');

        $serie->save();

         /*
         $serie->title = $request->input('title');
         $serie->content = $request->input('content');
         $serie->year = $request->input('year');
         $serie->save();*/
         //return $serie;
         return redirect()->route('manageSeriesPage')->with('info', 'Mise à jour effectuée avec succés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($serie_url)
    {
        $serie = Serie::where('url',$serie_url)->first();
        $serie->delete();

    return back()->with('info', 'Suppression reussie ! :).');
    }
}
