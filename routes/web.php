<?php

use App\Livewire\PostList;
use App\Livewire\PostShow;
use App\Livewire\Me\PostCreate;
use App\Livewire\Me\PostUpdate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Me\PostList as MePostList;

Route::get('/', PostList::class)->name('home');
Route::get('/posts/{post}', PostShow::class)->name('post.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', MePostList::class)->name('dashboard');

    Route::name('posts.')->group(function () {
        Route::get('/me/posts/create', PostCreate::class)->name('create');
        Route::get('/me/posts/{post}', PostUpdate::class)->name('update');
    });
});
