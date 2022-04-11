<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

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
        $favorites = Serie::all();
        return view('favorites.all', ['series' => $favorites]);

    }
}
