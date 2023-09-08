<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PanelCategoryController;
use App\Http\Controllers\PanelLatihanController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PanelMateriController;

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
// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// HOME Group
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
// End
//  GROUP ROUTING AUTH
Route::middleware('auth')->group(function () {
    // Category
    Route::get('/category', [CategoryController::class, 'index']);
    // Panel
    Route::get('/panel', [PanelController::class, 'index'])->middleware('admin');
    Route::resource('/create-category', PanelCategoryController::class)->parameters(['create-category' => 'category:slug'])->except('create');
    Route::resource('/create-latihan', PanelLatihanController::class)->parameters(['create-latihan' => 'latihan:slug'])->except('create');
    Route::resource('/create-materi', PanelMateriController::class)->parameters(['create-materi' => 'materi:slug'])->except('create');
    // End Panel
    // MATERI
    Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
    Route::get('/learn/{materi:slug}', [CategoryController::class, 'learn']);
    // End
    // End
    Route::get('/latihan', [LatihanController::class, 'index']);
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


    // Forum Diskusi
    Route::get('/forum-diskusi', function () {
        return view('interface.forum-diskusi.index', [
            'title' => 'Forum Diskusi',
            'active' => 'forum-diskusi'
        ]);
    });
});
