<?php

use App\Models\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Controllers

// Front Controller
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;



// Admin Controller
use App\Http\Controllers\TourController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');


// Tours
Route::prefix("/tours")->group(function () {

    Route::get('/show/{id}', [HomeController::class, 'show'])->name('home.tours.show');
    Route::get('/custom-tours', function () {
        return view('front.tours.custom_tours');
    })->name('custom_tours.index');

    Route::get('/combi-tours', function () {
        return view('front.tours.combi_tours');
    })->name('combi_tours.index');

    Route::get('/festival-tours', function () {
        return view('front.tours.festival_tours');
    })->name('festival_tours.index');

    Route::get('/fixed-tours', function () {
        return view('front.tours.fixed_tours');
    })->name('fixed_tours.index');
})->name('tours');


// About
Route::get('about-us', [AboutController::class, 'index'])->name('about.index');
Route::get('about-country', function () {
    return view('front.about-country');
})->name('about-country.index');


// Travel Info
Route::get('travel-info', function () {
    return view('front.travel_info');
})->name('travel-info.index');


// Contact Us
Route::get('contact-us', function () {
    return view('front.contact_us');
})->name('contact-us.index');


// Contact Us
Route::get('services', function () {
    return view('front.services');
})->name('services.index');





// !=============================Admin Route=============================================







Route::prefix('/admin')->group(function () {
    Route::get('/home', function () {
        $tour_counts = Tour::all()->count();
        return view('admin.home', ['tour_counts' => $tour_counts]);
    })->middleware('auth')->name('admin.index');


    // Tours
    Route::prefix('tours')->group(function () {
        Route::get('/lists', [TourController::class, 'index'])->name('tours.index');
        Route::get('/create', [TourController::class, 'create'])->name('tours.create');
        Route::get('/edit/{tour_id}', [TourController::class, 'edit'])->name('tours.edit');
        Route::put('/update/{tour_id}', [TourController::class, 'update'])->name('tour.update');
        Route::post('/store', [TourController::class, 'store'])->name('tours.store');
        Route::delete('/destroy/{tour_id}', [TourController::class, 'destroy'])->name('tours.destroy');
    });
});



Route::get('test', function () {


    // Tour::create([
    //     'user_id' => 4,
    //     'tour_img' => 'sadasdasdas',
    //     'tour_location_title' => 'ccccccssssss',
    //     'tour_location_url' => 'jjjjjjjjjjjj',
    //     'tour_title' => 'kkkkkkkkkk',
    //     'tour_text' => 'tttttttttttttt'
    // ]);
});
