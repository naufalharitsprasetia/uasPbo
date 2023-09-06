<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PanelCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});
Route::get('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});
Route::get('/register', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});
// Category
Route::get('/category', [CategoryController::class, 'index']);
// Route::resource('/create-category', PanelCategoryController::class);
Route::get('/create-category', [PanelCategoryController::class, 'index']);
Route::post('/create-category', [PanelCategoryController::class, 'store']);
// End
Route::get('/latihan', function () {
    return view('interface.latihan.index', [
        'title' => 'Latihan',
        'active' => 'latihan'
    ]);
});
Route::get('/papan-skor', function () {
    return view('interface.papan-skor.index', [
        'title' => 'Papan Skor',
        'active' => 'papan-skor'
    ]);
});
Route::get('/profil', function () {
    return view('interface.profil.index', [
        'title' => 'Profil',
        'active' => 'profil'
    ]);
});
Route::get('/setting', function () {
    return view('interface.setting.index', [
        'title' => 'Setting',
        'active' => 'setting'
    ]);
});
// MATERI
Route::get('/materi', function () {
    return view('interface.materi.index', [
        'title' => 'Materi',
        'active' => 'materi'
    ]);
});
Route::get('/learn', function () {
    return view('interface.materi.learn', [
        'title' => 'Learn',
        'active' => 'materi'
    ]);
});
// End
// Panel
Route::get('/panel', function () {
    return view('interface.panel.index', [
        'title' => 'Panel',
        'active' => 'panel'
    ]);
});
Route::get('/create-materi', function () {
    return view('interface.panel.create-materi', [
        'title' => 'Create Materi',
        'active' => 'panel'
    ]);
});
Route::post('/create-materi', [MateriController::class, 'store']);
// End Panel
// Forum Diskusi
Route::get('/forum-diskusi', function () {
    return view('interface.forum-diskusi.index', [
        'title' => 'Forum Diskusi',
        'active' => 'forum-diskusi'
    ]);
});
