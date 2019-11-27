<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('libro', 'LibroController');

Route::resource('editorial', 'EditorialController');

