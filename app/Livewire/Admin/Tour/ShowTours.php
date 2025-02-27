<?php

namespace App\Livewire\Admin\Tour;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

// Models
use App\Models\Tour;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowTours extends Component
{
    use WithFileUploads;
    use WithPagination;

    // public $tours;
    public function mount() {}
    // Render
    public function render()
    {
        $tours = Tour::paginate(4);
        return view('livewire.admin.tour.show-tours', [
            'tours' => $tours
        ]);
    }


    public function delete(Tour $tour)
    {
        // dd($tour);
        $tour->delete();

        session()->flash('tour', 'Tour Delete Successfully');
    }
}
