<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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
Route::get('/indexClient', [ClientController::class, 'index']);
Route::group(['prefix'  =>  '/pageClient'], function () {
    // Lấy dữ liệu  -> get
    Route::get('/about', [ClientController::class, 'pageAbout']);
    Route::get('/contacts', [ClientController::class, 'pageContacts']);
    Route::get('/history', [ClientController::class, 'pageHistory']);
    Route::get('/Login', [ClientController::class, 'pageLogin']);
    Route::get('/menu-coffee', [ClientController::class, 'pageMenu']);
    Route::get('/reservation', [ClientController::class, 'pageReservation']);
    Route::get('/services', [ClientController::class, 'pageServices']);
});

Route::get('/indexAdmin', [AdminController::class, 'pageindexAdmin']);
Route::group(['prefix'  =>  '/pagesAdmin'], function () {
    // Lấy dữ liệu  -> get
    Route::get('/ban', [AdminController::class, 'pageban']);
    Route::get('/diem-danh', [AdminController::class, 'pagediem']);
    Route::get('/donhang', [AdminController::class, 'pagedonhang']);
    Route::get('/login', [AdminController::class, 'pagelogin']);
    Route::get('/ord', [AdminController::class, 'pageord']);
    Route::get('/quanlykhachhang', [AdminController::class, 'pagequanlykhachhang']);
    Route::get('/chuquan', [AdminController::class, 'pagechuquan']);
    Route::get('/quanly', [AdminController::class, 'pagequanly']);
    Route::get('/kho', [AdminController::class, 'pagekho']);
    Route::get('/mon', [AdminController::class, 'pagemon']);
    Route::get('/vattu', [AdminController::class, 'pagevattu']);
    Route::get('/nhanvien', [AdminController::class, 'pagenhanvien']);
    Route::get('/phanquyen', [AdminController::class, 'pagephanquyen']);
    Route::get('/quanlyluong', [AdminController::class, 'pagequanlyluong']);
});
