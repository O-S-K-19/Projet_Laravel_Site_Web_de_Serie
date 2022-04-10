<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){


        //affiche les 3 derniers series sur le home
        $series1 = Serie::orderBy('created_at','desc')->take(5)->get();
        $series2 = Serie::orderBy('title','asc')->take(5)->get();
        return view('home', array('series1' => $series1,
    'series2' => $series2));
    }



}
