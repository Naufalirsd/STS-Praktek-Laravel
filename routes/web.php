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
    return view('index', [
        'metatitle' => 'Halaman Utama',
        'judul' => 'Amani Rumah Belajar',
        'isi' => 'Amani rumah belajar melatih calon tenaga kerja yang handal SIAP KERJA dan BERWIRAUSAHA',
        'photo' => 'Head.jpg'
    ]);
});

Route::get('/tentang-kami', function () {
    return view('tentangKami', [
        'metatitle' => 'Halaman tentang-kami',
        'judul' => 'Ini halaman tentang kami',
        'isi' => 'Ini adalah halaman tentang kami'
    ]);
});

Route::get('/kontak-kami', function () {
    return view('kontakKami');
});
