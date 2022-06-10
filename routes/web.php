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
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $itemBanner = config('db.itemBanner');
    //dd($itemBanner);    
    $cards = config('db.cards');
    //dd($cards);
    
    return view('comics.index', ['cards' => $cards], ['itemBanner' => $itemBanner]);
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $cards = config('db.cards');
    dd(count($cards));
    if ($id >= 0 && is_numeric($id) && $id < count($cards)) {
        //dd($cards[$id]);
        $card = $cards[$id];
        return view('comics.show', compact('card'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/movies', function () {
    return 'Movies page';
})->name('movies');

Route::get('/tv', function () {
    return 'Tv page';
})->name('tv');

Route::get('/games', function () {
    return 'Games page';
})->name('games');

Route::get('/collectibles', function () {
    return 'Collectibles page';
})->name('collectibles');

Route::get('/videos', function () {
    return 'Videos page';
})->name('videos');

Route::get('/fans', function () {
    return 'Fans page';
})->name('fans');

Route::get('/news', function () {
    return 'News page';
})->name('news');

Route::get('/shop', function () {
    return 'shop page';
})->name('shop');