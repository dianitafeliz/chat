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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('chat/with/{user}', 'App\Http\Controllers\ChatController@chat_with');

Route::get('/chat/{chat}', '\App\Http\Controllers\ChatController@show')->name('chat.show');

Route::post('message/sent', '\App\Http\Controllers\MessageController@sent');
