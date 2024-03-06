<?php

use Illuminate\Support\Facades\Route;

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
    $players = [
        ['name' => 'Novak', 'surname' => 'Djokovich'],
        ['name' => 'Carlos', 'surname' => 'Alcaraz'],
        ['name' => 'Jannik', 'surname' => 'Sinner'],
        ['name' => 'Daniil', 'surname' => 'Medvedev'],
        ['name' => 'Andrey', 'surname' => 'Rublev'],
    ];
    return view('home', compact('players'));
});
