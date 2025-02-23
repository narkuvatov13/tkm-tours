<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    //Tour Lists
    public function index()
    {
        return view('admin.tour.show_tours');
    }


    // Tour Create
    public function create()
    {
        return view('admin.tour.create_tour');
    }

    // Tour Store
    public function store(Request $request)
    {

        // Data Validate
        $request->validate([
            'tour_image' => 'required',
            'tour_location_title' => 'required',
            'tour_location_url' => 'required',
            'tour_title' => 'required',
            'tour_text' => 'required',
        ]);
        // $request->validateAll();

        if ($request->tour_image) {
            $image = $request->tour_image->store('tour_images');
        }


        $tour = Tour::create([
            'user_id' => auth()->user()->id,
            'tour_img' => $image,
            'tour_location_title' => $request->tour_location_title,
            'tour_location_url' => $request->tour_location_url,
            'tour_title' => $request->tour_title,
            'tour_text' => $request->tour_text,
        ]);

        session()->flash('tour', 'Tour Created Successfully');
        return redirect()->route('tours.index');
    }


    public function edit($tour_id)
    {
        $tour  = Tour::find($tour_id);
        return view('admin.tour.edit_tour', compact('tour'));
    }

    public function update(Request $request, $tour_id)
    {

        if ($request->tour_location_title == null || $request->tour_location_url == null || $request->tour_title == null || $request->tour_text == null) {
            // dd($request->tour_image);
            $request->validate([
                'tour_image' => 'required',
                'tour_location_title' => 'required',
                'tour_location_url' => 'required',
                'tour_title' => 'required',
                'tour_text' => 'required',
            ]);
        }

        $tour = Tour::find($tour_id);
        if ($request->tour_image) {
            $tour->tour_img = $request->tour_image->store('tour_images');
        }

        $tour->tour_location_title = $request->tour_location_title;
        $tour->tour_location_url = $request->tour_location_url;
        $tour->tour_title = $request->tour_title;
        $tour->tour_text = $request->tour_text;

        $tour->save();

        session()->flash('tour', 'Tour Update Successfully');

        return redirect()->route('tours.index');
        // dd($request->tour_image);
    }



    public function destroy($tour_id)
    {
        // dd('sadas');
        $tour = Tour::find($tour_id);

        $tour->delete();

        session()->flash('tour', 'Tour Delete Successfully');

        return back();
    }
}
