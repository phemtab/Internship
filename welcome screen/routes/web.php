<?php

use Illuminate\Support\Facades\Route;
use App\Message;

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
Route::get('/create', function(Request $request){
    return view('message.create');
});
Route::get('/defCustom', function(Request $request){
    return view('message.create_custom');
});
Route::get('/jarvis1', function(Request $request){
    return view('message.jarvis-theme');
});
Route::get('/jarvis', function(Request $request){
    return view('message.animated-weather-card');
});
Route::get('custom', 'MessageController@custom');
Route::get('custom', 'MessageController@customEdit');
Route::post('customs', 'MessageController@customUpdate')->name('update.customUpdate');
Route::post('custom', 'MessageController@customStore')->name('customs.customStore');
Route::get('/unDirty', 'MessageController@unDirty');
Route::get('/isDirty', 'MessageController@isDirty');
Route::get('/show', 'MessageController@show');
Route::post('/touch', 'MessageController@touch');
Route::get('/', 'MessageController@index');
Route::get('message', 'MessageController@index');
Route::get('message', 'MessageController@edit');
Route::post('message', 'MessageController@update')->name('messages.update');
Route::post('message','MessageController@store')->name('messages.store');
Route::resource('message', 'MessageController');
Route::apiResource('message', 'MessageController');