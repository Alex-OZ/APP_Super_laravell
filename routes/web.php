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
Route::get('/superheroes', function(){
   return view('superheroes.index');
});


Route::resource('superheroes','SuperheroController');
Route::get('/superheroes/{superhero}', function ($id) {
    $superhero=DB::table('superheroes')->find($id);
    return view('superheroes.show', compact('superhero'));
});
