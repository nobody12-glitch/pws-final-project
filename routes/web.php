<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{detil_berita:slug}', [BeritaController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/berita/checkSlug' , [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/berita', DashboardBeritaController::class)->middleware('auth');

