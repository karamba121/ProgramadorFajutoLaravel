<?php

namespace App\Http\Controllers;

class FerramentasController extends Controller
{
    public function Index()
    {
        $title = 'Ferramentas';

        return view('ferramentas.index', compact(['title']));
    }
}
