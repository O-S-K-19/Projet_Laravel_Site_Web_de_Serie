<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   /*
        $mes_users = 'C:\Users\ousse\Desktop\SCRAPPING\users.csv';
        //$mes_series = 'C:\Users\ousse\Desktop\SCRAPPING\series.csv';
        $resultat_users = static::read($mes_users);
        //$resultat_series = read($mes_series);
        static::display($resultat_users);
        static::insertIntoUsers($resultat_users);
        return 'SUCCES !!!';
        //affiche les 3 derniers series sur le home
        $series = Serie::orderBy('created_at','desc')->take(3)->get();
        return view('welcome', array('series' => $series));

    */
    private function read($file_csv){
        $file = fopen($file_csv, 'r');
        while (!feof($file)){
            $tab_line[] = fgetcsv($file, 1024, ';');
        }
        fclose($file);
        return $tab_line;
    }

    private function display($result){
        echo '<pre>';
    foreach($result as $line)
        print_r($line);
    echo '</pre>';
    }


    //insertion des données dans les tables
    // Pour users
    private function insert($result){
        foreach($result as $line){
            DB::table('users')->insertGetId([

                'name' => $line[0],
                'email' => $line[1],
                'email_verified_at' => now(),
                'password' => $line[2],
                'is_admin' => $line[3],
                'remember_token' => 'null',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }










}


