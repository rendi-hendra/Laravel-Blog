<?php

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use App\Http\Livewire\PostCrud;
use App\Http\Controllers\usercon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [usercon::class, 'index'])->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/posting/{posting:slug}', [usercon::class, 'show'])->name('posting');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/category/{category:slug}', function (Category $category) {
        return view('category', [
            'postingan' => $category->posting,
            'category' => $category->name,
        ]);
    })->name('category');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('posts', PostCrud::class)->name('posts');
    Route::get('user', function () {
        return view('user');
    })->name('user');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('/dashboard/posts', DashboardPostController::class);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('dashboard', [
        'postingan' => $author->posts
    ]);
});
