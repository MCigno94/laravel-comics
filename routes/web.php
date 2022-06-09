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
    $cards = config('db.cards');
    //dd($cards);
    $itemBanner = config('db.itemBanner');
    //dd($itemBanner);    
    return view('comics', ['cards' => $cards], ['itemBanner' => $itemBanner]);
})->name('comics');