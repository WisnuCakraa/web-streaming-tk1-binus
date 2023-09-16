<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/movies/add', function () {
    return view('movies.add');
});

Route::get('/movies/view/{id}', [MoviesController::class, 'view']);
Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');


route::resource('movies', MoviesController::class);
