<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // creo una funzione (index) in cui inserisco al logica 
    public function index() {
        return view('home');
    }

    //funzione per mostarre i movies

    public function showMovie() {
        return view('movie');
    }
}
