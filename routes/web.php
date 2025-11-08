<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.homepage');   
})->name('homepage');

Route::get('/nature', function () {
    return view('pages.nature');
})->name('nature');

Route::get('/beach', function () {
    return view('pages.beach');
})->name('beach');

Route::get('/mountains', function () {
    return view('pages.mountains');
})->name('mountains');

Route::get('/animals', function () {
    return view('pages.animals');
})->name('animals');

Route::get('/cars', function () {
    return view('pages.cars');
})->name('cars');

/*
Route::get('/second', function () {
    return view('second');
});*/

