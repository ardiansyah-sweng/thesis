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

//Route untuk geometri
Route::get('/', function() {
    return view('geometrys.index');
});
Route::group(['prefix' => 'geometri'], function() {
    Route::get('/', function() {
        return view('geometrys.index');
    });
    Route::get('/persegi', function() {
        return view('geometrys.pages.persegi');
    });
    Route::get('/persegipanjang', function() {
        return view('geometrys.pages.persegipanjang');
    });
    Route::get('/segitiga', function() {
        return view('geometrys.pages.segitiga');
    });
    Route::get('/jajargenjang', function() {
        return view('geometrys.pages.jajargenjang');
    });
    Route::get('/belahketupat', function() {
        return view('geometrys.pages.belahketupat');
    });
    Route::get('/layanglayang', function() {
        return view('geometrys.pages.layang');
    });
    Route::get('/trapesium', function() {
        return view('geometrys.pages.trapesium');
    });
    Route::get('/lingkaran', function() {
        return view('geometrys.pages.lingkaran');
    });
    Route::get('/kubus', function() {
        return view('geometrys.pages.kubus');
    });
    Route::get('/balok', function() {
        return view('geometrys.pages.balok');
    });
    Route::get('/bola', function() {
        return view('geometrys.pages.bola');
    });
    Route::get('/kerucut', function() {
        return view('geometrys.pages.kerucut');
    });
    Route::get('/limasbalok', function() {
        return view('geometrys.pages.limasbalok');
    });
    Route::get('/limaskubus', function() {
        return view('geometrys.pages.limaskubus');
    });
    Route::get('/prismasegiempat', function() {
        return view('geometrys.pages.prismaempat');
    });
    Route::get('/prismasegitiga', function() {
        return view('geometrys.pages.prismatiga');
    });
    Route::get('/tabung', function() {
        return view('geometrys.pages.tabung');
    });
});
