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
    // Recupero l'array da config
    $comics = config("comics");
    // Lo passo alla view usando compact
    return view('comics.index', compact("comics"));
})->name("comics.index");

Route::get('/{id}', function ($id) {
    // Recupero l'array da config
    $comics = config("comics");
    $selectedComic = null;
    foreach ($comics as $comic) {
        if ($comic["id"] === (int)$id) {
            $selectedComic = $comic;
            break;
        }
    }

    if (is_null($selectedComic)) {
        abort("404");
    }

    return view("comics.details", [
        "comic" => $selectedComic
    ]);
})->name("comics.details");