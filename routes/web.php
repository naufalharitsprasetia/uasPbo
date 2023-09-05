<?php

use App\Http\Controllers\MateriController;
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
Route::get('/category', function () {
    return view('interface.category.index', [
        'title' => 'Category',
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

Route::get('/materi', function () {
    return view('interface.materi.index', [
        'title' => 'Materi',
        'active' => 'materi'
    ]);
});
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
Route::get('/create-category', function () {
    return view('interface.panel.create-category', [
        'title' => 'Create Category',
        'active' => 'panel'
    ]);
});

// End Panel