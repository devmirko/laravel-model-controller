<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    $films = Movie::all(['title', 'nationality', 'vote']);
    return view('home', compact('films'));



    }
}
