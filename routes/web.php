<?php

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
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});
Route::get('/materi', function () {
    return view('interface.materi.index', [
        'title' => 'Materi',
        'active' => 'materi'
    ]);
});
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
