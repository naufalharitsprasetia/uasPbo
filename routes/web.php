<?php

use App\Models\Category;
use App\Models\Progress;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PanelMateriController;
use App\Http\Controllers\PanelJawabanController;
use App\Http\Controllers\PanelLatihanController;
use App\Http\Controllers\PanelCategoryController;

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
    Route::resource('/create-latihan', PanelLatihanController::class)->parameters(['create-latihan' => 'latihan'])->except('create');
    Route::resource('/create-materi', PanelMateriController::class)->parameters(['create-materi' => 'materi:slug'])->except('create');
    // Jawaban Panel
    Route::resource('/create-jawaban', PanelJawabanController::class)->parameters(['create-jawaban' => 'jawaban'])->except('create');
    // End Panel
    // MATERI
    Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
    Route::get('/learn/{materi:slug}', [CategoryController::class, 'learn']);
    // End
    // Progress
    Route::get('/papan-skor', [ProgressController::class, 'index']);
    Route::post('/progress/add', [ProgressController::class, 'add']);
    // End
    // Latihan
    Route::get('/latihan', [LatihanController::class, 'index']);
    Route::get('/latihan/{materi:slug}', [LatihanController::class, 'latihan']);
    Route::post('/proses-form', [LatihanController::class, 'proses']);
    Route::get('/selesai-latihan', [LatihanController::class, 'selesai']);
    // Profil
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::post('/profil', [ProfilController::class, 'update']);
    // Setting
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
