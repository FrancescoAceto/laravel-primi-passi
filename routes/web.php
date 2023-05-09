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

Route::get('/home.blade.php', function () {

    $spesa = [
        'Latte',
        'Miele',
        'Pane', 
        'Acqua'
    ];

    return view('home', compact ('spesa'));
});
