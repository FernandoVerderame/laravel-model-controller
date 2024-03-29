<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    // Single action controller
    public function __invoke()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
