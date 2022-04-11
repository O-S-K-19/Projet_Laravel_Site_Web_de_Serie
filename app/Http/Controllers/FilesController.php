<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //  ->paginate(10) {{ $files->links() }}
        $files = File::all();
        return view('files.all', ['files' => $files]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
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
            'fileName' => 'required|string|max:255',
           'filePath'=> 'required',

        ]);

        // Create
        File::create($request->all());

        return redirect()->route('upload.index')->with('info', 'Le fichier a bien été enregistré');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($filePath)
    {
        $file = File::where('filePath',$filePath)->first();
        return view('files.edit',array('file' => $file));
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
            'fileName' => 'required|string|max:255',
           'filePath'=> 'required',

         ]);

        $file = File::find($id);
        $file->user_id =  $request->input('user_id');
        $file->fileName =  $request->input('fileName');
        $file->filePath =  $request->input('filePath');


        $file->save();


         return redirect()->route('upload.index')->with('info', 'Mise à jour effectuée avec succés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($filePath)
    {
        $file = File::where('filePath',$filePath)->first();
        $file->delete();

    return back()->with('info', 'Suppression reussie ! :).');
    }
}
