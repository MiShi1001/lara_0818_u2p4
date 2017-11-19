<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        return view('posts.index');
    }

    public function about(){

        return view('posts.about');
    }

    public function blog(){

        return view('posts.blog');
    }

    public function contact(){

        return view('posts.contact');
    }
}
