<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/update', $handle);
});