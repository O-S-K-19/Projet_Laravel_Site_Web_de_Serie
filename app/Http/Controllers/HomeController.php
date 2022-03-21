<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $series = Serie::all();
        return view('welcome',
        array('series' => $series
        ));
    }
}
