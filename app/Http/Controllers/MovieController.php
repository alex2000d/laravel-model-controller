<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\movie;

class MovieController extends Controller
{
    public function index(){

         $movies = movie::all();
        

        return view('movies.index', compact('movies'));
    }
}
