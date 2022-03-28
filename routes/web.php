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

    $comic = config('comics');

    return view('home', ['fumetti' => $comic]);
});

Route::get('superman', function () {

    $comic = config('comics');

    $superman = [];

    foreach($comic as $item) {
        if($item['title'] == "Action Comics #1000: The Deluxe Edition") {
            $superman = $item;
        }
    }

    return view('superman', ['superman' => $superman]);
});

