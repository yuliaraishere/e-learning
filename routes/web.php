<?php

use App\Http\Controllers\GedungController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PtkController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ThnAkademikController;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\KelaskuController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware'=>['auth','ceklevel:admin,cpns']],function (){

// });
Route::prefix('master')->group(function () {
    Route::controller(PengajarController::class)->prefix('pengajar')->group(function () {
        Route::get('', 'index')->name('pengajar');
        Route::post('save', 'store')->name('pengajar/save');
        Route::get('edit/{id}', 'edit')->name('pengajar/edit');
        Route::put('update/{id}', 'update')->name('pengajar/update');
        Route::delete('delete/{id}', 'destroy')->name('pengajar/delete');
    });
    
    Route::controller(MateriController::class)->prefix('materi')->group(function () {
        Route::get('', 'index')->name('materi');
        Route::post('save', 'store')->name('materi/save');
        Route::get('edit/{id}', 'edit')->name('materi/edit');
        Route::put('update/{id}', 'update')->name('materi/update');
        Route::delete('delete/{id}', 'destroy')->name('materi/delete');
    });

    Route::controller(ThnAkademikController::class)->prefix('thnakademik')->group(function () {
        Route::get('', 'index')->name('thnakademik');
        Route::post('save', 'store')->name('thnakademik/save');
        Route::get('edit/{id}', 'edit')->name('thnakademik/edit');
        Route::put('update/{id}', 'update')->name('thnakademik/update');
        Route::delete('delete/{id}', 'destroy')->name('thnakademik/delete');
    });

    Route::controller(GedungController::class)->prefix('gedung')->group(function () {
        Route::get('', 'index')->name('gedung');
        Route::post('save', 'store')->name('gedung/save');
        Route::get('edit/{id}', 'edit')->name('gedung/edit');
        Route::put('update/{id}', 'update')->name('gedung/update');
        Route::delete('delete/{id}', 'destroy')->name('gedung/delete');
    });

    Route::controller(RuanganController::class)->prefix('ruangan')->group(function () {
        Route::get('', 'index')->name('ruangan');
        Route::get('add', 'add')->name('ruangan/add');
        Route::post('save', 'store')->name('ruangan/save');
        Route::get('edit/{id}', 'edit')->name('ruangan/edit');
        Route::put('update/{id}', 'update')->name('ruangan/update');
        Route::delete('delete/{id}', 'destroy')->name('ruangan/delete');
    });

    Route::controller(GolonganController::class)->prefix('golongan')->group(function () {
        Route::get('', 'index')->name('golongan');
        Route::post('save', 'store')->name('golongan/save');
        Route::get('edit/{id}', 'edit')->name('golongan/edit');
        Route::put('update/{id}', 'update')->name('golongan/update');
        Route::delete('delete/{id}', 'destroy')->name('golongan/delete');
    });

    Route::controller(PtkController::class)->prefix('ptk')->group(function () {
        Route::get('', 'index')->name('ptk');
        Route::post('save', 'store')->name('ptk/save');
        Route::get('edit/{id}', 'edit')->name('ptk/edit');
        Route::put('update/{id}', 'update')->name('ptk/update');
        Route::delete('delete/{id}', 'destroy')->name('ptk/delete');
    });

    Route::controller(JurusanController::class)->prefix('jurusan')->group(function () {
        Route::get('', 'index')->name('jurusan');
        Route::get('add', 'add')->name('jurusan/add');
        Route::post('save', 'store')->name('jurusan/save');
        Route::get('detail/{id}', 'detail')->name('jurusan/detail');
        Route::get('edit/{id}', 'edit')->name('jurusan/edit');
        Route::put('update/{id}', 'update')->name('jurusan/update');
        Route::delete('delete/{id}', 'destroy')->name('jurusan/delete');
    });

    Route::controller(KelasController::class)->prefix('kelas')->group(function () {
        Route::get('', 'index')->name('kelas');
        Route::get('add', 'add')->name('kelas/add');
        Route::post('save', 'store')->name('kelas/save');
        Route::get('detail/{id}', 'detail')->name('kelas/detail');
        Route::get('edit/{id}', 'edit')->name('kelas/edit');
        Route::put('update/{id}', 'update')->name('kelas/update');
        Route::delete('delete/{id}', 'destroy')->name('kelas/delete');
    });

    Route::controller(KepegawaianController::class)->prefix('kepegawaian')->group(function () {
        Route::get('', 'index')->name('kepegawaian');
        Route::post('save', 'store')->name('kepegawaian/save');
        Route::get('edit/{id}', 'edit')->name('kepegawaian/edit');
        Route::put('update/{id}', 'update')->name('kepegawaian/update');
        Route::delete('delete/{id}', 'destroy')->name('kepegawaian/delete');
    });

    Route::controller(SiswaController::class)->prefix('siswa')->group(function () {
        Route::get('', 'index')->name('siswa');
        Route::post('save', 'store')->name('siswa/save');
        Route::get('edit/{id}', 'edit')->name('siswa/edit');
        Route::put('update/{id}', 'update')->name('siswa/update');
        Route::delete('delete/{id}', 'destroy')->name('siswa/delete');
    });

    Route::controller(GuruController::class)->prefix('guru')->group(function () {
        Route::get('', 'index')->name('guru');
        Route::post('save', 'store')->name('guru/save');
        Route::get('edit/{id}', 'edit')->name('guru/edit');
        Route::put('update/{id}', 'update')->name('guru/update');
        Route::delete('delete/{id}', 'destroy')->name('guru/delete');
    });
    
    Route::controller(KelaskuController::class)->prefix('kelasku')->group(function () {
        Route::get('', 'index')->name('kelasku');        
        Route::get('hardskill', 'hardskill')->name('kelasku/hardskill');
        
    });


    Route::get('/tipografi', [\App\Http\Controllers\UmumController::class, 'tp'])->name('tipografi');
    Route::get('/sertifikat', [\App\Http\Controllers\SertifikatController::class, 'index'])->name('sertifikat');
    // Route::get('/kelasku', [\App\Http\Controllers\KelaskuController::class, 'index'])->name('kelasku');
    // Route::get('/hardskill', [\App\Http\Controllers\KelaskuController::class, 'hard'])->name('kelasku/hardskill');
});

Route::get('/job-search',  [App\Http\Controllers\JobController::class, 'index'])->name('job-search');



Route::get('/zoom', [\App\Http\Controllers\ZoomController::class, 'index'])->name('zoom');
Route::get('/zoom/create', [\App\Http\Controllers\ZoomController::class, 'create'])->name('zoom/create');
Route::post('/zoom/save', [\App\Http\Controllers\ZoomController::class, 'save'])->name('zoom/save');

Route::get('/identitas', [\App\Http\Controllers\IdentitasController::class, 'index'])->name('identitas');
