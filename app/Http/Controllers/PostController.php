<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function Index()
    {
        $title = 'Post';

        return view('post.index', compact(['title']));
    }
}
