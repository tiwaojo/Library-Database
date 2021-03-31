<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home()
    {
        # code...
        return view('index');
    }
    public function book()
    {
        # code...
        return view('book');
    }
    public function employees()
    {
        # code...
        return view('employees');
    }
    public function genre()
    {
        # code...
        return view('genre');
    }
    public function author()
    {
        # code...
        return view('author');
    }
    public function library()
    {
        # code...
        return view('lib');
    }

}

