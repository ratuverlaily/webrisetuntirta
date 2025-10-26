<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RisetkamiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\A_VisiMisiController;
use App\Http\Controllers\A1_FokusPenelitianController;
use App\Http\Controllers\A2_RoadmapController;
use App\Http\Controllers\A3_MitraKerjasamaController;
use App\Http\Controllers\A4_FasilitasController;

use App\Http\Controllers\B_ArtikelController;

use App\Http\Controllers\C_KegiatanController;

use App\Http\Controllers\D_galleryController;

use App\Http\Controllers\E_anggotaController;

use App\Http\Controllers\F_kontakController;


// Guest: login
Route::middleware('guest')->group(function () {

    Route::get('/', [HomeController::class, 'viepengunjung'])->name('index');

    //Menu Tentang Kami
    Route::get('/tentang/visimisi', [TentangController::class, 'visimisiView'])->name('tentang.visimisi');
    Route::get('/tentang/fokuspenelitian', [TentangController::class, 'fokuspenelitianView'])->name('tentang.fokuspenelitian');
    Route::get('/tentang/roadmap', [TentangController::class, 'roadmapView'])->name('tentang.roadmap');
    Route::get('/tentang/mitra', [TentangController::class, 'mitraView'])->name('tentang.mitra');
    Route::get('/tentang/fasilitas', [TentangController::class, 'fasilitasView'])->name('tentang.fasilitas');

    //Menu Publikasi
    Route::get('/artikel/view', [ArtikelController::class, 'artikelView'])->name('artikel.view');

    //Fokus Penelitian
    Route::get('/risetkami/view', [RisetkamiController::class, 'risetkamiView'])->name('risetkami.view');

    //Menu Anggota
    Route::get('/anggota/view', [AnggotaController::class, 'anggotaView'])->name('anggota.view');

    //Menu Anggota
    Route::get('/kontak/view', [KontakController::class, 'kontakView'])->name('kontak.view');

    //login dan registrasi
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin'])->name('login.post');

});

// Authenticated: logout, redirect
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [AdminController::class, 'View'])->name('home');

    Route::middleware('checkrole:1')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'View'])->name('dashboard');
        Route::get('/dashboard/create', [AdminController::class, 'Create'])->name('dashboard.create');
        Route::post('/dashboard/store', [AdminController::class, 'Store'])->name('dashboard.store');
        Route::get('/dashboard/{user}/edit', [AdminController::class, 'Edit'])->name('dashboard.edit');
        Route::put('/dashboard/{user}', [AdminController::class, 'Update'])->name('dashboard.update');
        Route::delete('/dashboard/{user}', [AdminController::class, 'Destroy'])->name('dashboard.destroy');

        /*--------------------tentang kami-------------------*/
        Route::get('/visimisi/content', [A_VisiMisiController::class, 'Content'])->name('visimisi.content');
        Route::get('/visimisi', [A_VisiMisiController::class, 'View'])->name('visimisi.view');
        Route::post('/visimisi', [A_VisiMisiController::class, 'Store'])->name('visimisi.store');
        Route::put('/visimisi/{id}', [A_VisiMisiController::class, 'Update'])->name('visimisi.update');

        Route::get('/fokuspenelitian/content', [A1_FokusPenelitianController::class, 'Content'])->name('fokuspenelitian.content');
        Route::get('/fokuspenelitian', [A1_FokusPenelitianController::class, 'View'])->name('fokuspenelitian.view');
        Route::post('/visimisi/upload-image', [A1_FokusPenelitianController::class, 'uploadImage'])->name('visimisi.uploadImage');
        Route::get('/fokuspenelitian/create', [A1_FokusPenelitianController::class, 'Create'])->name('fokuspenelitian.create');
        Route::post('/fokuspenelitian/store', [A1_FokusPenelitianController::class, 'Store'])->name('fokuspenelitian.store');
        Route::get('/fokuspenelitian/show/{id}', [A1_FokusPenelitianController::class, 'Show'])->name('fokuspenelitian.show');
        Route::get('/fokuspenelitian/{id}/edit', [A1_FokusPenelitianController::class, 'Edit'])->name('fokuspenelitian.edit');
        Route::put('/fokuspenelitian/{fokus}', [A1_FokusPenelitianController::class, 'Update'])->name('fokuspenelitian.update');
        Route::delete('/fokuspenelitian/{fokus}', [A1_FokusPenelitianController::class, 'Destroy'])->name('fokuspenelitian.destroy');

        Route::get('/roadmap/content', [A2_RoadmapController::class, 'Content'])->name('roadmap.content');
        Route::get('/roadmap', [A2_RoadmapController::class, 'View'])->name('roadmap.view');
        Route::post('/roadmap/store', [A2_RoadmapController::class, 'Store'])->name('roadmap.store');
        Route::put('/roadmap/{id}', [A2_RoadmapController::class, 'Update'])->name('roadmap.update');

        Route::get('/mitrakerjasama/content', [A3_MitraKerjasamaController::class, 'Content'])->name('mitrakerjasama.content');
        Route::get('/mitrakerjasama', [A3_MitraKerjasamaController::class, 'View'])->name('mitrakerjasama.view');
        Route::get('/mitrakerjasama/create', [A3_MitraKerjasamaController::class, 'Create'])->name('mitrakerjasama.create');
        Route::post('/mitrakerjasama/store', [A3_MitraKerjasamaController::class, 'Store'])->name('mitrakerjasama.store');
        Route::get('/mitrakerjasama/{id}/edit', [A3_MitraKerjasamaController::class, 'kerjasamaEdit'])->name('mitrakerjasama.edit');
        Route::put('/mitrakerjasama/{mitra}', [A3_MitraKerjasamaController::class, 'Update'])->name('mitrakerjasama.update');
        Route::delete('/mitrakerjasama/{mitra}', [A3_MitraKerjasamaController::class, 'Destroy'])->name('mitrakerjasama.destroy');

        Route::get('/fasilitas/content', [A4_FasilitasController::class, 'Content'])->name('fasilitas.content');
        Route::get('/fasilitas', [A4_FasilitasController::class, 'View'])->name('fasilitas.view');
        Route::get('/fasilitas/create', [A4_FasilitasController::class, 'Create'])->name('fasilitas.create');
        Route::post('/fasilitas/store', [A4_FasilitasController::class, 'Store'])->name('fasilitas.store');
        Route::get('/fasilitas/show/{id}', [A4_FasilitasController::class, 'Show'])->name('fasilitas.show');
        Route::get('/fasilitas/{id}/edit', [A4_FasilitasController::class, 'Edit'])->name('fasilitas.edit');
        Route::put('/fasilitas/{id}', [A4_FasilitasController::class, 'Update'])->name('fasilitas.update');
        Route::delete('/fasilitas/{id}', [A4_FasilitasController::class, 'Destroy'])->name('fasilitas.destroy');

        Route::get('/artikel/content', [B_ArtikelController::class, 'Content'])->name('artikel.content');
        Route::get('/artikel', [B_ArtikelController::class, 'View'])->name('artikel.view');
        Route::get('/artikel/create', [B_ArtikelController::class, 'Create'])->name('artikel.create');
        Route::post('/artikel/store', [B_ArtikelController::class, 'Store'])->name('artikel.store');
        Route::get('/artikel/show/{id}', [B_ArtikelController::class, 'Show'])->name('artikel.show');
        Route::get('/artikel/{id}/edit', [B_ArtikelController::class, 'Edit'])->name('artikel.edit');
        Route::put('/artikel/{id}', [B_ArtikelController::class, 'Update'])->name('artikel.update');
        Route::delete('/artikel/{id}', [B_ArtikelController::class, 'Destroy'])->name('artikel.destroy');

        Route::get('/kegiatan/content', [C_KegiatanController::class, 'Content'])->name('kegiatan.content');
        Route::get('/kegiatan', [C_KegiatanController::class, 'View'])->name('kegiatan.view');
        Route::get('/kegiatan/create', [C_KegiatanController::class, 'Create'])->name('kegiatan.create');
        Route::post('/kegiatan/store', [C_KegiatanController::class, 'Store'])->name('kegiatan.store');
        Route::get('/kegiatan/show/{id}', [C_KegiatanController::class, 'Show'])->name('kegiatan.show');
        Route::get('/kegiatan/{id}/edit', [C_KegiatanController::class, 'Edit'])->name('kegiatan.edit');
        Route::put('/kegiatan/{id}', [C_KegiatanController::class, 'Update'])->name('kegiatan.update');
        Route::delete('/kegiatan/{id}', [C_KegiatanController::class, 'Destroy'])->name('kegiatan.destroy');


        /*----------------Kegiatan----------------*/
        //Gallery
        Route::get('/gallery', [D_galleryController::class, 'galleryView'])->name('gallery.view');
        Route::get('/gallery/create', [D_galleryController::class, 'galleryCreate'])->name('gallery.create');
        Route::post('/gallery/store', [D_galleryController::class, 'galleryStore'])->name('gallery.store');
        Route::get('/gallery/show/{id}', [D_galleryController::class, 'galleryShow'])->name('gallery.show');
        Route::get('/gallery/{id}/edit', [D_galleryController::class, 'galleryEdit'])->name('gallery.edit');
        Route::put('/gallery/{id}', [D_galleryController::class, 'galleryUpdate'])->name('gallery.update');
        Route::delete('/gallery/{id}', [D_galleryController::class, 'galleryDestroy'])->name('gallery.destroy');


        //Peneliti & Staff
        Route::get('/anggota', [E_anggotaController::class, 'anggotaView'])->name('anggota.view');
        Route::get('/anggota/create', [E_anggotaController::class, 'anggotaCreate'])->name('anggota.create');
        Route::post('/anggota/store', [E_anggotaController::class, 'anggotaStore'])->name('anggota.store');
        Route::get('/anggota/show/{id}', [E_anggotaController::class, 'anggotaShow'])->name('anggota.show');
        Route::get('/anggota/{id}/edit', [E_anggotaController::class, 'anggotaEdit'])->name('anggota.edit');
        Route::put('/anggota/{id}', [E_anggotaController::class, 'anggotaUpdate'])->name('anggota.update');
        Route::delete('/anggota/{id}', [E_anggotaController::class, 'anggotaDestroy'])->name('anggota.destroy');

        //Kontak
        Route::get('/kontak', [F_kontakController::class, 'kontakView'])->name('kontak.view');
        Route::get('/kontak/create', [F_kontakController::class, 'kontakCreate'])->name('kontak.create');
        Route::post('/kontak/store', [F_kontakController::class, 'kontakStore'])->name('kontak.store');
        Route::get('/kontak/show/{id}', [F_kontakController::class, 'kontakShow'])->name('kontak.show');
        Route::get('/kontak/{id}/edit', [F_kontakController::class, 'kontakEdit'])->name('kontak.edit');
        Route::put('/kontak/{id}', [F_kontakController::class, 'kontakUpdate'])->name('kontak.update');
        Route::delete('/kontak/{id}', [F_kontakController::class, 'kontakDestroy'])->name('kontak.destroy');

    });
});





