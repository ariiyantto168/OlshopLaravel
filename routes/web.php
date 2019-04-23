<?php


use Illuminate\Http\Request;


Route::get('/', function () {
    $user = $request->user();

    dd($user->hasRole('admin'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
