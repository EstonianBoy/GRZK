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
    return view('homePage');
});

Route::get('/dikobraz', function () {
    return view('dikibrazPage');
});

Route::get('/shinshilla', function () {
    return view('shinshillaPage');
});

Route::get('/peschanka', function () {
    return view('peschankaPage');
});

Route::get('/kapibara', function () {
    return view('kapibaraPage');
});

Route::get('/surok', function () {
    return view('surokPage');
});
