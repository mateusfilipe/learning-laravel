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
    $nome = 'Mateus';
    $idade = 22;

    $arr = [1,2,3,4,5];
    
    $nomes = ['Mateus', 'Mario', 'Maria', 'João'];

    return view('welcome', 
    [
        'nome'      => $nome, 
        'idade'     => $idade, 
        'profissao' => 'Programador',
        'arr'       => $arr,
        'nomes'     => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});


