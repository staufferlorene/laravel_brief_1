<?php

use App\Models\Recette;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
 *
 *
fait avec Olivier
 *
 *
 *
*/

/*Route::view('/', 'welcome');
Route::view('/projects', 'projects');

Route::get('/recettes', function (){

    $model = new Recette();
    $recettes = $model->getAll();

    return view('recettes.index', compact('recettes'));
})->name('recettes.index');


Route::get('/recettes/{id}', function (int $id){
    /*    dd($id);*/

/*    $model = new Recette();
    $recette = $model->getById($id);

    return view('recettes.show', compact('recette'));
})->name('recettes.show');*/





/*
 *
 *
 * Créer avec brief
 *
 *
 */

use App\Http\Controllers\RecettesController;
use App\Models\Recettes;

Route::resource('recettes', RecettesController::class);



Route::view('/', 'welcome');
Route::view('/projects', 'projects');

Route::get('/recettes', function (){

    $model = new Recettes();
    $recettes = $model->all();

    return view('recettes.index', compact('recettes'));
})->name('recettes.index');


Route::get('/recettes/{id}', function (int $id){
    /*    dd($id);*/

$model = new Recette();
    $recette = $model->getById($id);

    return view('recettes.show', compact('recette'));
})->name('recettes.show');
