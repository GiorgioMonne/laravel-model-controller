<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        // $movies = Movie::where("vote", ">=" , 8)->orderBy("vote", "desc")->get();
        $movies = Movie::all();

        return view("home", compact("movies"));
    }
}
