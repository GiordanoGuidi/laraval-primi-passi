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
})->name('home');

Route::get('players', function () {
    $players = [
        ['position' => 1, 'name' => 'Novak', 'surname' => 'Djokovich'],
        ['position' => 2, 'name' => 'Carlos', 'surname' => 'Alcaraz'],
        ['position' => 3, 'name' => 'Jannik', 'surname' => 'Sinner'],
        ['position' => 4, 'name' => 'Daniil', 'surname' => 'Medvedev'],
        ['position' => 5, 'name' => 'Andrey', 'surname' => 'Rublev'],
    ];
    return view('tennis.players', compact('players'));
})->name('players');

Route::get('tournaments', function () {
    $tournaments = [
        ['name' => 'Indian Wells Masters 1000', 'location' => 'California'],
        ['name' => 'Miami Masters 1000', 'location' => 'Miami'],
        ['name' => ' Montecarlo Masters 1000', 'location' => 'Montecarlo'],
        ['name' => 'Roma Masters 1000', 'location' => 'Roma'],

    ];
    return view('tennis.tournaments', compact('tournaments'));
})->name('tournaments');
