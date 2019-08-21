<?php

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
    return view('aabill');
});


Route::post('/send', 'SendEmail@send');


Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
Route::post('/telegram', 'TelegramBotController@sendMessage');
