<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Test');
})->name('index');

Route::get('/example', function(){
    return Inertia::render('Example');
})->name('example');
