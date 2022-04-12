<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //  ->paginate(10) {{ $files->links() }}
        $favorites = Favorite::all();
       $userID = Auth::user()->user_id;

        return view('favorites.all', array(
            'favorites' => $favorites,
            'userID'=> $userID,
));
    }



    public function store(Request $request)
    {





        $favorite = new Favorite();

        $favorite->user_id =  $request->user_id;
        $favorite->title =  $request->title;
        $favorite->url = urlencode( $request->title);
        $favorite->year =  $request->year;
        $favorite->save();


        return back();
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorite = Favorite::where('id',$id);
        $favorite->delete();

    return back()->with('info', 'Suppression reussie ! :).');
    }















}



