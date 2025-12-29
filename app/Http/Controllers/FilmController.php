<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function index()
    {
        //
        $data = Film::paginate(10);
        return response()->json($data);
        
    }

    public function show(Film $film)
    {
        //
        
        return response()->json($film);
        
    }
}
