<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

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
    $data['title'] = "Landing Page | Juara Services";
    return view('welcome', $data);
});
Route::resource('admin/produk', ProdukController::class)->middleware('adminauth');
Route::resource('/deposit', DepositController::class)->middleware('auth');
Route::resource('/transaksi', TransaksiController::class)->middleware('auth');

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::resource('/dashboard', App\Http\Controllers\DashboardController::class);
    Route::post('/logout', 'logout')->name('logout');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
});
Route::get('price/{id}', function ($id) {
    $produk = Produk::where('id', $id)->first();
    $harga = $produk->harga;
    return $harga;
})->name('price');
