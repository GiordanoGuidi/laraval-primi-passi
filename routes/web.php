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
    return view('home');
});

Route::get('players', function () {
    $players = [
        ['position' => 1, 'name' => 'Novak', 'surname' => 'Djokovich'],
        ['position' => 2, 'name' => 'Carlos', 'surname' => 'Alcaraz'],
        ['position' => 3, 'name' => 'Jannik', 'surname' => 'Sinner'],
        ['position' => 4, 'name' => 'Daniil', 'surname' => 'Medvedev'],
        ['position' => 5, 'name' => 'Andrey', 'surname' => 'Rublev'],
    ];
    return view('tennis.players', compact('players'));
});
