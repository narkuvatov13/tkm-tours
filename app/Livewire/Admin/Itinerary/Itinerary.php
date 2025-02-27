<?php

namespace App\Livewire\Admin\Itinerary;

use App\Models\Itinerary as ModelsItinerary;
use Livewire\Component;
use Livewire\WithPagination;


class Itinerary extends Component
{
    use WithPagination;


    public function mount() {}
    public function render()
    {

        $itineraries = ModelsItinerary::paginate(4);
        return view('livewire.admin.itinerary.itinerary', [
            'itineraries' => $itineraries
        ]);
    }


    public function delete(ModelsItinerary $itineraries)
    {
        // dd($itineraries);
        $itineraries->delete();

        session()->flash('itinerary', 'Itineraries Delete Successfully');
    }
}
