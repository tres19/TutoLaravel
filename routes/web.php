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

Route::get('/', ['as'=>'home', function () {
    return view('vue1');
}]);

Route::get('{n}', function($n) {
    return response('Je suis la page ' . $n .' ! ', 200);
})->where('n','[1-3]');


Route::get('article/{n}', function($n) {
    return view('article')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');
