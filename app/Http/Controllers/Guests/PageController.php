<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function comics()
    {   
        $comicsList = Comic::all();
        return view('comics', compact('comicsList'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
