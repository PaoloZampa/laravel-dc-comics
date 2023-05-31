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
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
