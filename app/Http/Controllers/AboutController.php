<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Index

    protected function index()
    {
        return view('front.about');
    }
}
