<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tour;
class HomeController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        $count = $tours->count();

        return view('front.home',compact('tours','count'));
    }


    public function show($tour_id){

        $tour = Tour::find($tour_id);

        return view('front.tours.show_tours',compact('tour'));


    }


}
