<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HackathonController;
use App\Http\Controllers\RegistrationController;

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

 Route::get('/challenge-create', 'App\Http\Controllers\Controller@challangecreate');
 Route::post('/challenge-create', 'App\Http\Controllers\Controller@store');
//  challengedisplay
 Route::get('/challenges/{short_url}', 'App\Http\Controllers\Controller@ChallengeRedirect');
 Route::get('/challenge/{slug}', 'App\Http\Controllers\Controller@challengedisplay');
 Route::post('/challenge/{slug}', 'App\Http\Controllers\Controller@SaveSolution');
 Route::get('/test', 'App\Http\Controllers\Controller@test');
// Route::get('/hackathon-create', 'App\Http\Controllers\Controller@create');

// Route::get('/hackathon-register', 'App\Http\Controllers\Controller@register');

Route::get('/hackathon-detail', 'App\Http\Controllers\Controller@hackathondetail');

Route::get('/hackathon/{slug}', 'App\Http\Controllers\HackathonController@hackathon_detail')->name('hackathon');

Route::get('/hack/{short_url}', 'App\Http\Controllers\HackathonController@hack_redirect');


Route::get('/registrations/create/{short_url}', 'App\Http\Controllers\RegistrationController@create');
Route::post('/registrations/{short_url}', 'App\Http\Controllers\RegistrationController@save');

Route::resources([
	'hackathons' => HackathonController::class,
    'registrations' => RegistrationController::class,
]);