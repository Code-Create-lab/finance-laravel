<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd(env('LIVEWIRE_PATH'));
    return view('index');
});


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/livewire.js', $handle)->name('livewireJs');
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/update', $handle)->name('livewireUpdate');
});
