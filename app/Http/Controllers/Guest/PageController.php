<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // creo una funzione (index) in cui inserisco al logica 
    public function index() {
        return view('home');
    }

    //funzione per mostarre i movies

    public function showMovie() {

        // vado a ceracre i film della tabella
        //e con il metodo all() prendo tutte le righe della tabella del mio database
        // che ho collegato al Model

        $movies = Movie::all();

        //dd($movies);

        
        return view('movie',compact('movies'));

    }
}
