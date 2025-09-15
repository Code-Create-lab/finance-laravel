<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd(env('LIVEWIRE_PATH'));
    return view('index');
})->name('home');

Route::get('/privacy-policy', function () {
    // dd(env('LIVEWIRE_PATH'));
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
    // dd(env('LIVEWIRE_PATH'));
    return view('terms-condition');
})->name('terms-conditions');


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/livewire.js', $handle)->name('livewireJs');
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::get('/' . env('LIVEWIRE_PATH') . '/livewire/update', $handle)->name('livewireUpdate');
});
