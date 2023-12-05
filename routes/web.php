<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\BookingController;

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

Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/',[MainController::class,'index'])->name('home');


// Route to display the list of available halls
Route::get('/halls', [HallController::class, 'index'])->name('halls.index');

// Route to display details of a specific hall
Route::get('/halls/{id}', [HallController::class, 'show'])->name('halls.show');

// Route to show the booking form for a specific hall
Route::get('/halls/{id}/book', [BookingController::class, 'create'])->name('bookings.create');

// Route to handle the form submission and create a booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
