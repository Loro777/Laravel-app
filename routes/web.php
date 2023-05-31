<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/Lorencki/52612/people', [PeopleController::class, 'index']);
Route::get('/Lorencki/52612/show/{id}', [PeopleController::class, 'show']);
Route::put('/Lorencki/52612/update/{id}', [PeopleController::class, 'update']);
Route::get('/Lorencki/52612/destroy/{id}', [PeopleController::class, 'destroy']);
Route::put('/Lorencki/52612/store', [PeopleController::class, 'store']);