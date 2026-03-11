<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Get latest 3 published articles for the welcome page
    $latest_articles = \App\Models\Article::latest()
        ->take(3)
        ->get();
        
    // Get latest 6 galleries for the welcome page
    $latest_galleries = \App\Models\Gallery::latest()
        ->take(6)
        ->get();

    return view('welcome', compact('latest_articles', 'latest_galleries'));
});

// Public Routes for Articles and Galleries
Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/berita/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/profil/sejarah', 'profil.sejarah')->name('profil.sejarah');
Route::view('/profil/visi-misi', 'profil.visi-misi')->name('profil.visi-misi');
Route::view('/profil/struktur-organisasi', 'profil.struktur-organisasi')->name('profil.struktur-organisasi');
Route::view('/profil/fasilitas', 'profil.fasilitas')->name('profil.fasilitas');

// Akademik Routes
Route::view('/akademik/guru-staf', 'akademik.guru-staf')->name('akademik.guru-staf');
Route::view('/akademik/kurikulum', 'akademik.kurikulum')->name('akademik.kurikulum');

// Kesiswaan Routes
Route::view('/kesiswaan/osis-mpk', 'kesiswaan.osis-mpk')->name('kesiswaan.osis-mpk');
Route::view('/kesiswaan/ekstrakurikuler', 'kesiswaan.ekstrakurikuler')->name('kesiswaan.ekstrakurikuler');
Route::view('/kesiswaan/prestasi', 'kesiswaan.prestasi')->name('kesiswaan.prestasi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class);
    
    // Settings Manager
    Route::get('/settings/sekolah', [SettingController::class, 'editSekolah'])->name('settings.sekolah');
    Route::put('/settings/sekolah', [SettingController::class, 'updateSekolah'])->name('settings.sekolah.update');
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy']);
});

require __DIR__.'/auth.php';
