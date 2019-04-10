<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';

        return view('home.index', compact(['title']));
    }
}
