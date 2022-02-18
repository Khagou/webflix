<?php

use App\Http\Controllers\PolitesseController;
use App\Models\Category;
use App\Models\Movie;
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

Route::get('/exercice/categories', function (){
    return view ('exercice.categories',[
        'categories' => Category::all()
    ]); 
});

Route::get('/exercice/categories/creer', function() {
    Category::create([
        'name' => 'test'
    ]);

    return redirect('/exercice/categories');
});

Route::get('/exercice/categories/{id}', function($id){
    $categorie = Category::find($id);

    return $categorie->name;
});

Route::get('/exercice/movies', function (){
    return view ('exercice.movies',[
        'movies' => Movie::all()
    ]);
});

Route::get('/exercice/movie-view/{id}', function($id){
    
    return view ('/exercice/movie-view',[
        'movie' => Movie::find($id)
    ]);
});