<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::where('vote', '>', 9)
                                ->orderBy('title', 'asc')
                                ->limit(10)->get();
        return view('home', [ 'movies' => $movies]);
    }
}
