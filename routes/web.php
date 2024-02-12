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

Route::get('/', function(){
    $welcome = 'Benvenuti nella mia pagina di prova!';
    $user = 'ciccio';
    return view('home', compact('welcome', 'user')); 
    })->name('home');
