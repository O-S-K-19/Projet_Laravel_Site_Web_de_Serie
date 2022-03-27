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
        $series = Serie::orderBy('created_at','desc')->take(3)->get();
        return view('home', array('series' => $series));
    }



}
