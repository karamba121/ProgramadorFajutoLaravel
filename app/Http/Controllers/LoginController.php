<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function Index()
    {
        $title = 'Login';

        return view('login.index', compact(['title']));
    }
}
