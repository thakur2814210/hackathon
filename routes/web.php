<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HackathonController;
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

Route::get('/hackathon-create', 'App\Http\Controllers\Controller@create');

Route::get('/hackathon-register', 'App\Http\Controllers\Controller@register');

Route::get('/hackathon-detail', 'App\Http\Controllers\Controller@hackathondetail');
