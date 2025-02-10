<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

// Route::get('/admin/inputkategori', function () {
//     return view('admin.kategori');
// });
Route::get('/admin/inputkategori', [CategoryController::class, 'index'])
    ->name('admin.kategori');

Route::get('/admin/inputpenulis', function () {
    return view('admin.penulis');
});
