<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get('/about', 'about')
        ->name('about.page')
        ->middleware('checkage');

    Route::get('/contact', 'contact');
});

// Route::get('/about', [DemoController::class, 'about']);
// Route::get('/contact', [DemoController::class, 'contact']);

// Route::get('/contact', function () {
//     return view('contact');
// });
