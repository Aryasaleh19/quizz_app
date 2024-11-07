<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('example.index');
    }

    public function about()
    {
        return view('example.about');
    }

    public function contact()
    {
        return view('example.contact');
    }
}
