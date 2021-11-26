<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\SurahController;

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

//route alquran api
Route::get('/', [QuranController::class, 'index']);
//route cari surat
Route::get('/surat/cari', [QuranController::class, 'cariSurah']);
//route surat
Route::get('/surat/{surah}', [SurahController::class, 'detailsurah'])->name('detail.surah');
