<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::where("vote", ">=" , 9)->orderBy("vote", "desc")->get();

        return view("home", compact("movies"));
    }
}
