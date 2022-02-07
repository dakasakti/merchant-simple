<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;

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

Route::middleware(['auth:sanctum', 'verified'])->resource('admin', AdminController::class);
Route::middleware(['auth:sanctum', 'verified', 'role'])->resource('article', ArticleController::class);

Route::get('coba', function () {
    return view('coba');
});

Route::get('about', function () {
    return view('about');
});

Route::get('review', function () {
    return view('blogg');
});

Route::get('home', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
