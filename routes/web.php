<?php

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
    return view('welcome');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addMovie', function () {
    return view('addMovie', ['CategoryID'=>App\Models\Category::all()]);
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class, 'add'] ) ->name('addCategory');

Route::post('/addMovie/store',[App\Http\Controllers\MovieController::class, 'add'] ) ->name('addMovie');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class, 'view'] ) ->name('showCategory');

Route::get('/showMovie',[App\Http\Controllers\MovieController::class, 'view'] ) ->name('showMovie');

Route::get('/deleteMovie/{id}',[App\Http\Controllers\MovieController::class, 'delete'] ) ->name('deleteMovie');

Route::get('editMovie/{id}',[App\Http\Controllers\MovieController::class, 'edit'] ) ->name('editMovie');
//http://locahhost/editMovie.php?id=22 localhost

Route::post('/updateMovie',[App\Http\Controllers\MovieController::class, 'update'] ) ->name('updateMovie');

Route::get('/movieDetails/{id}',[App\Http\Controllers\MovieController::class, 'moviedetails'] ) ->name('movie.details');

Route::get('/movies',[App\Http\Controllers\MovieController::class, 'viewMovie'] ) ->name('movies');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
