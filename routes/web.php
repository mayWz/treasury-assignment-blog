<?php

use App\Livewire\Me\PostCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::name('me.posts.')->group(function () {
        // Route::get('/list', function () {
        //     return view('posts.list');
        // })->name('list');
        Route::get('/create', PostCreate::class)->name('create');
    });
});
