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
    return view('Accueil', [
        'numbers' => [1, 3, 7],
        'name' => 'khagu',
    ]);
});

Route::get('/bonjour/{name}', function($name) {
    return view('hello', [
        'numbers' => [],
        'name' => $name,
    ]);
});

Route::get('/good-bye', function(){
    return view('au-revoir', [
    'name' => 'khagu',
    ]);
});

Route::get('/a-propos', function(){
    return view('a-propos', [
        'teams' => ['Antoine', 'Quentin', 'Lise', 'Laurent']
    ]);
});



Route::get('/about-show/{team}', function($team){
    return view('about-show' ,[
    'team' => $team,
    ]);
});