<?php

use App\Http\Controllers\PolitesseController;
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

Route::get('/bonjour/{name}', [PolitesseController::class, 'helloEveryone']);

Route::get('/good-bye', function(){
    return view('au-revoir', [
    'name' => 'khagu',
    ]);
});

Route::get('/a-propos', [PolitesseController::class, 'about']);



Route::get('/about-show/{team}',[PolitesseControlle::class, 'aboutShow']);