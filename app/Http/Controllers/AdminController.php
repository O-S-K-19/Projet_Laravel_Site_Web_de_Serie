<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\User;
use App\Models\Serie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function show(Request $request) {

        switch($request){
            case $request->route()->named('manageUsersPage'):
                $users = User::all();
                return view('admin.manageUsers', ['users' => $users]);

            case $request->route()->named('manageSeriesPage'):
                $series = Serie::all();
                return view('admin.manageSeries', ['series' => $series]);

            case $request->route()->named('manageCommentsPage'):
                $comments = Comment::all();
                return view('admin.manageComments', ['comments' => $comments]);

            case $request->route()->named('manageContactsPage'):
                $contacts = Contact::all();
                return view('admin.manageContacts', ['contacts' => $contacts]);

            case $request->route()->named('manageSeriesPage'):
                $favorites = Favorite::all();
                return view('admin.manageFavorites', ['favorites' => $favorites]);

        }


    }
}
