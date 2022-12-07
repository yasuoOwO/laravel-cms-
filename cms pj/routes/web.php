<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');


Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/services',function(){
    return view('services');
})->name('services');

Route::get('/projects',function(){
    return view('projects');
})->name('projects');
