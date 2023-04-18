<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\OpcionController;
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
//Route to categories
Route::resource('categorias', CategoriaController::class);
//Route to options ans send parameters for relations
Route::resource('opciones', OpcionController::class)->parameters([
    'opciones' => 'opcion'
]);