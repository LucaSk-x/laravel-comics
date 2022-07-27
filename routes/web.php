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

        $comics = config('comics');
    return view('home', ['comics' => $comics]);

})->name('home');



Route::get('/{id}', function ($id) {
    $comics = config('comics');

    $foundProduct = null;
    foreach($comics as $i => $comic) {
        if($comic['id'] === intval($id)) {
            $foundProduct = $comic;
            break;
        }
    }

    if(is_null($foundProduct)) {
        abort("404");
    }

    return view('prodotti.show',['product' => $foundProduct]);
})->name('products.show');
