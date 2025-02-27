<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;

use App\Models\Tour;

class ItineraryController extends Controller
{
    public function index()
    {
        return view('admin.itinerary.itinerary');
    }


    public function create()
    {
        return view('admin.itinerary.create');
    }



    public function store(Request $request)
    {
        // $request->validate([
        //     'tour_id' => 'required|integer',
        //     'itinerary_title' => 'required|string|max:255',
        //     'itinerary_paragraph' => 'required|array',
        //     'itinerary_paragraph.*' => 'required|array',
        // ]);

        // dd($request->all());
        // $itinerary = new Itinerary();
        // dd($request->itinerary_paragraph);

        Itinerary::create([
            'tour_id' => $request->tour,
            'itinerary' => [
                'itinerary_title' => $request->itinerary_title,
                'itinerary_paragraph' => $request->itinerary_paragraph,
            ]
        ]);

        session()->flash('itinerary', 'Itinerary Created Successfully');
        return view('admin.itinerary.itinerary');
    }


    public function edit(Request $request, $itinerary_id)
    {
        $itinerary = Itinerary::find($itinerary_id);
        return view('admin.itinerary.edit', compact('itinerary'));
    }

    public function update(Request $request, $itinerary_id)
    {
        Itinerary::findOrFail($itinerary_id)->update([
            'itinerary' => [
                'itinerary_title' => $request->itinerary_title,
                'itinerary_paragraph' => $request->itinerary_paragraph,
            ]
        ]);
        session()->flash('itinerary', 'Itinerary Updates Successfully');

        return view('admin.itinerary.itinerary');
    }
}
