<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\A_VisiMisiController;
use App\Http\Controllers\A1_FokusPenelitianController;
use App\Http\Controllers\A2_RoadmapController;
use App\Http\Controllers\A3_MitraKerjasamaController;
use App\Http\Controllers\A4_FasilitasController;

use App\Http\Controllers\B_SfwController;
use App\Http\Controllers\B1_penelitianController;
use App\Http\Controllers\B2_pmasyarakatController;

use App\Http\Controllers\C5_chaptersController;
use App\Http\Controllers\C4_paperController;
use App\Http\Controllers\C3_makalaController;
use App\Http\Controllers\C2_publikasiController;
use App\Http\Controllers\C1_bukuController;
use App\Http\Controllers\C_artikelController;

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
    Route::get('/publikasi/artikel', [PublikasiController::class, 'artikelView'])->name('publikasi.artikel');
    Route::get('/publikasi/buku', [PublikasiController::class, 'bukuView'])->name('publikasi.buku');
    Route::get('/publikasi/chapter', [PublikasiController::class, 'chapterView'])->name('publikasi.chapter');
    Route::get('/publikasi/makala', [PublikasiController::class, 'makalaView'])->name('publikasi.makala');
    Route::get('/publikasi/paper', [PublikasiController::class, 'paperView'])->name('publikasi.paper');
    Route::get('/publikasi/seminar', [PublikasiController::class, 'seminarView'])->name('publikasi.seminar');

    //Menu Kegiatan
    Route::get('/kegiatan/penelitian', [KegiatanController::class, 'penelitianView'])->name('kegiatan.penelitian');
    Route::get('/kegiatan/pengabdian', [KegiatanController::class, 'pengabdianView'])->name('kegiatan.pengabdian');
    Route::get('/kegiatan/sfw', [KegiatanController::class, 'sfwView'])->name('kegiatan.sfw');

    //Menu Gallery
    Route::get('/gallery', [GaleriController::class, 'galleryView'])->name('gallery');

    //Menu Anggota
    Route::get('/anggota', [AnggotaController::class, 'anggotaView'])->name('anggota');

    //Menu Anggota
    Route::get('/kontak', [KontakController::class, 'kontakView'])->name('kontak');

    //login dan registrasi
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin'])->name('login.post');

});

// Authenticated: logout, redirect
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [AdminController::class, 'dashboardView'])->name('home');

    Route::middleware('checkrole:1')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboardView'])->name('dashboard');
        Route::get('/dashboard/create', [AdminController::class, 'dashboardCreate'])->name('dashboard.create');
        Route::post('/dashboard/store', [AdminController::class, 'dashboardStore'])->name('dashboard.store');
        Route::get('/dashboard/{user}/edit', [AdminController::class, 'dashboardEdit'])->name('dashboard.edit');
        Route::put('/dashboard/{user}', [AdminController::class, 'dashboardUpdate'])->name('dashboard.update');
        Route::delete('/dashboard/{user}', [AdminController::class, 'dashboardDestroy'])->name('dashboard.destroy');

        /*--------------------tentang kami-------------------*/
        Route::get('/visimisi/content', [A_VisiMisiController::class, 'visiMisiContent'])->name('visimisi.content');
        Route::get('/visimisi', [A_VisiMisiController::class, 'visiMisiView'])->name('visimisi.view');
        Route::post('/visimisi', [A_VisiMisiController::class, 'visiMisiStore'])->name('visimisi.store');
        Route::put('/visimisi/{id}', [A_VisiMisiController::class, 'visiMisiUpdate'])->name('visimisi.update');

        Route::get('/fokuspenelitian/content', [A1_FokusPenelitianController::class, 'fokusPenelitianContent'])->name('fokuspenelitian.content');
        Route::get('/fokuspenelitian', [A1_FokusPenelitianController::class, 'fokusPenelitianView'])->name('fokuspenelitian.view');
        Route::post('/visimisi/upload-image', [A1_FokusPenelitianController::class, 'uploadImage'])->name('visimisi.uploadImage');
        Route::get('/fokuspenelitian/create', [A1_FokusPenelitianController::class, 'fokusPenelitianCreate'])->name('fokuspenelitian.create');
        Route::post('/fokuspenelitian/store', [A1_FokusPenelitianController::class, 'fokusPenelitianStore'])->name('fokuspenelitian.store');
        Route::get('/fokuspenelitian/show/{id}', [A1_FokusPenelitianController::class, 'fokusPenelitianShow'])->name('fokuspenelitian.show');
        Route::get('/fokuspenelitian/{id}/edit', [A1_FokusPenelitianController::class, 'fokusPenelitianEdit'])->name('fokuspenelitian.edit');
        Route::put('/fokuspenelitian/{fokus}', [A1_FokusPenelitianController::class, 'fokusPenelitianUpdate'])->name('fokuspenelitian.update');
        Route::delete('/fokuspenelitian/{fokus}', [A1_FokusPenelitianController::class, 'fokusPenelitianDestroy'])->name('fokuspenelitian.destroy');

        Route::get('/roadmap/content', [A2_RoadmapController::class, 'roadmapContent'])->name('roadmap.content');
        Route::get('/roadmap', [A2_RoadmapController::class, 'roadmapView'])->name('roadmap.view');
        Route::post('/roadmap/store', [A2_RoadmapController::class, 'roadmapStore'])->name('roadmap.store');
        Route::put('/roadmap/{id}', [A2_RoadmapController::class, 'roadmapUpdate'])->name('roadmap.update');

        Route::get('/mitrakerjasama/content', [A3_MitraKerjasamaController::class, 'kerjasamaContent'])->name('mitrakerjasama.content');
        Route::get('/mitrakerjasama', [A3_MitraKerjasamaController::class, 'kerjasamaView'])->name('mitrakerjasama.view');
        Route::get('/mitrakerjasama/create', [A3_MitraKerjasamaController::class, 'kerjasamaCreate'])->name('mitrakerjasama.create');
        Route::post('/mitrakerjasama/store', [A3_MitraKerjasamaController::class, 'kerjasamaStore'])->name('mitrakerjasama.store');
        Route::get('/mitrakerjasama/{id}/edit', [A3_MitraKerjasamaController::class, 'kerjasamaEdit'])->name('mitrakerjasama.edit');
        Route::put('/mitrakerjasama/{mitra}', [A3_MitraKerjasamaController::class, 'kerjasamaUpdate'])->name('mitrakerjasama.update');
        Route::delete('/mitrakerjasama/{mitra}', [A3_MitraKerjasamaController::class, 'kerjasamaDestroy'])->name('mitrakerjasama.destroy');

        Route::get('/fasilitas', [A4_FasilitasController::class, 'fasilitasView'])->name('fasilitas.view');
        Route::get('/fasilitas/create', [A4_FasilitasController::class, 'fasilitasCreate'])->name('fasilitas.create');
        Route::post('/fasilitas/store', [A4_FasilitasController::class, 'fasilitasStore'])->name('fasilitas.store');
        Route::get('/fasilitas/show/{id}', [A4_FasilitasController::class, 'fasilitasShow'])->name('fasilitas.show');
        Route::get('/fasilitas/{id}/edit', [A4_FasilitasController::class, 'fasilitasEdit'])->name('fasilitas.edit');
        Route::put('/fasilitas/{id}', [A4_FasilitasController::class, 'fasilitasUpdate'])->name('fasilitas.update');
        Route::delete('/fasilitas/{id}', [A4_FasilitasController::class, 'fasilitasDestroy'])->name('fasilitas.destroy');

        /*----------------Kegiatan----------------*/

        Route::get('/sfw', [B_SfwController::class, 'sfwView'])->name('sfw.view');
        Route::get('/sfw/create', [B_SfwController::class, 'sfwCreate'])->name('sfw.create');
        Route::post('/sfw/store', [B_SfwController::class, 'sfwStore'])->name('sfw.store');
        Route::get('/sfw/show/{id}', [B_SfwController::class, 'sfwShow'])->name('sfw.show');
        Route::get('/sfw/{id}/edit', [B_SfwController::class, 'sfwEdit'])->name('sfw.edit');
        Route::put('/sfw/{id}', [B_SfwController::class, 'sfwUpdate'])->name('sfw.update');
        Route::delete('/sfw/{id}', [B_SfwController::class, 'sfwDestroy'])->name('sfw.destroy');

        Route::get('/penelitian', [B1_penelitianController::class, 'penelitianView'])->name('penelitian.view');
        Route::get('/penelitian/create', [B1_penelitianController::class, 'penelitianCreate'])->name('penelitian.create');
        Route::post('/penelitian/store', [B1_penelitianController::class, 'penelitianStore'])->name('penelitian.store');
        Route::get('/penelitian/show/{id}', [B1_penelitianController::class, 'penelitianShow'])->name('penelitian.show');
        Route::get('/penelitian/{id}/edit', [B1_penelitianController::class, 'penelitianEdit'])->name('penelitian.edit');
        Route::put('/penelitian/{id}', [B1_penelitianController::class, 'penelitianUpdate'])->name('penelitian.update');
        Route::delete('/penelitian/{id}', [B1_penelitianController::class, 'penelitianDestroy'])->name('penelitian.destroy');

        Route::get('/pmasyarakat', [B2_pmasyarakatController::class, 'pmasyarakatView'])->name('pmasyarakat.view');
        Route::get('/pmasyarakat/create', [B2_pmasyarakatController::class, 'pmasyarakatCreate'])->name('pmasyarakat.create');
        Route::post('/pmasyarakat/store', [B2_pmasyarakatController::class, 'pmasyarakatStore'])->name('pmasyarakat.store');
        Route::get('/pmasyarakat/show/{id}', [B2_pmasyarakatController::class, 'pmasyarakatShow'])->name('pmasyarakat.show');
        Route::get('/pmasyarakat/{id}/edit', [B2_pmasyarakatController::class, 'pmasyarakatEdit'])->name('pmasyarakat.edit');
        Route::put('/pmasyarakat/{id}', [B2_pmasyarakatController::class, 'pmasyarakatUpdate'])->name('pmasyarakat.update');
        Route::delete('/pmasyarakat/{id}', [B2_pmasyarakatController::class, 'pmasyarakatDestroy'])->name('pmasyarakat.destroy');

        /*----------------Publikasi----------------*/

        Route::get('/artikel', [C_artikelController::class, 'artikelView'])->name('artikel.view');
        Route::get('/artikel/create', [C_artikelController::class, 'artikelCreate'])->name('artikel.create');
        Route::post('/artikel/store', [C_artikelController::class, 'artikelStore'])->name('artikel.store');
        Route::get('/artikel/show/{id}', [C_artikelController::class, 'artikelShow'])->name('artikel.show');
        Route::get('/artikel/{id}/edit', [C_artikelController::class, 'artikelEdit'])->name('artikel.edit');
        Route::put('/artikel/{id}', [C_artikelController::class, 'artikelUpdate'])->name('artikel.update');
        Route::delete('/artikel/{id}', [C_artikelController::class, 'artikelDestroy'])->name('artikel.destroy');

        Route::get('/buku', [C1_bukuController::class, 'bukuView'])->name('buku.view');
        Route::get('/buku/create', [C1_bukuController::class, 'bukuCreate'])->name('buku.create');
        Route::post('/buku/store', [C1_bukuController::class, 'bukuStore'])->name('buku.store');
        Route::get('/buku/show/{id}', [C1_bukuController::class, 'bukuShow'])->name('buku.show');
        Route::get('/buku/{id}/edit', [C1_bukuController::class, 'bukuEdit'])->name('buku.edit');
        Route::put('/buku/{id}', [C1_bukuController::class, 'bukuUpdate'])->name('buku.update');
        Route::delete('/buku/{id}', [C1_bukuController::class, 'bukuDestroy'])->name('buku.destroy');

        Route::get('/publikasi', [C2_publikasiController::class, 'publikasiView'])->name('publikasi.view');
        Route::get('/publikasi/create', [C2_publikasiController::class, 'publikasiCreate'])->name('publikasi.create');
        Route::post('/publikasi/store', [C2_publikasiController::class, 'publikasiStore'])->name('publikasi.store');
        Route::get('/publikasi/show/{id}', [C2_publikasiController::class, 'publikasiShow'])->name('publikasi.show');
        Route::get('/publikasi/{id}/edit', [C2_publikasiController::class, 'publikasiEdit'])->name('publikasi.edit');
        Route::put('/publikasi/{id}', [C2_publikasiController::class, 'publikasiUpdate'])->name('publikasi.update');
        Route::delete('/publikasi/{id}', [C2_publikasiController::class, 'publikasiDestroy'])->name('publikasi.destroy');

        Route::get('/makala', [C3_makalaController::class, 'makalaView'])->name('makala.view');
        Route::get('/makala/create', [C3_makalaController::class, 'makalaCreate'])->name('makala.create');
        Route::post('/makala/store', [C3_makalaController::class, 'makalaStore'])->name('makala.store');
        Route::get('/makala/show/{id}', [C3_makalaController::class, 'makalaShow'])->name('makala.show');
        Route::get('/makala/{id}/edit', [C3_makalaController::class, 'makalaEdit'])->name('makala.edit');
        Route::put('/makala/{id}', [C3_makalaController::class, 'makalaUpdate'])->name('makala.update');
        Route::delete('/makala/{id}', [C3_makalaController::class, 'makalaDestroy'])->name('makala.destroy');

        Route::get('/paper', [C4_paperController::class, 'paperView'])->name('paper.view');
        Route::get('/paper/create', [C4_paperController::class, 'paperCreate'])->name('paper.create');
        Route::post('/paper/store', [C4_paperController::class, 'paperStore'])->name('paper.store');
        Route::get('/paper/show/{id}', [C4_paperController::class, 'paperShow'])->name('paper.show');
        Route::get('/paper/{id}/edit', [C4_paperController::class, 'paperEdit'])->name('paper.edit');
        Route::put('/paper/{id}', [C4_paperController::class, 'paperUpdate'])->name('paper.update');
        Route::delete('/paper/{id}', [C4_paperController::class, 'paperDestroy'])->name('paper.destroy');

        Route::get('/chapters', [C5_chaptersController::class, 'chaptersView'])->name('chapters.view');
        Route::get('/chapters/create', [C5_chaptersController::class, 'chaptersCreate'])->name('chapters.create');
        Route::post('/chapters/store', [C5_chaptersController::class, 'chaptersStore'])->name('chapters.store');
        Route::get('/chapters/show/{id}', [C5_chaptersController::class, 'chaptersShow'])->name('chapters.show');
        Route::get('/chapters/{id}/edit', [C5_chaptersController::class, 'chaptersEdit'])->name('chapters.edit');
        Route::put('/chapters/{id}', [C5_chaptersController::class, 'chaptersUpdate'])->name('chapters.update');
        Route::delete('/chapters/{id}', [C5_chaptersController::class, 'chaptersDestroy'])->name('chapters.destroy');

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





