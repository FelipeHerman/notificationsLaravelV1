<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/messages', 'HomeController@store')->name('messages.store');
Route::get('messages/{id}', 'HomeController@show')->name('messages.show');
Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');
Route::patch('notificaciones/{id}', 'NotificationsController@read')->name('notifications.read');