<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/tabung', function () {
    return view('tabung');
});

Route::get('/bola', function () {
    return view('bola');
});

Route::get('/kerucut', function () {
    return view('kerucut');
});

Route::get('/hasiltabung',[Calculator::class, 'tabung']);

Route::get('/hasilbola',[Calculator::class, 'bola']);

Route::get('/hasilkerucut',[Calculator::class, 'kerucut']);