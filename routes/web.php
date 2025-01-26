<?php

use App\Livewire\Me\PostUpdate;
use App\Livewire\Me\PostList;
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
    Route::get('/dashboard', PostList::class)->name('dashboard');

    Route::name('posts.')->group(function () {
        Route::get('/posts/create', PostCreate::class)->name('create');
        Route::get('/posts/{post}', PostUpdate::class)->name('update');
    });
});
