<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

Route::get('/redirect', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 'user') {
            return redirect('/user/dashboard');
        } else {
            return redirect('/admin/dashboard');
        }
    } else {
        return redirect('/');
    }
});

Route::get('/', function () {
    return view('welcome');
});

//route for users
Route::prefix('user')->group(function () {

    //route untuk form pendaftaran media online
    Route::controller(User\MediaonlineController::class)->group(function() {
        Route::get('/media-online/register', 'create')->name('media-online-create');
    });


    //route for profile
    Route::get('/profile', ProfileController::class);

    //route for ddashboard
    Route::get('/dashboard', DashboardController::class);

    //router for izin belajar
    Route::get('/permohonan_izin_belajar', [IzinBelajarController::class, 'index']);
    Route::get('/permohonan_izin_belajar/create', [IzinBelajarController::class, 'create']);
    Route::post('/permohonan_izin_belajar/store', [IzinBelajarController::class, 'store']);
    Route::get('/permohonan_izin_belajar/show/{id}', [IzinBelajarController::class, 'show']);
    Route::delete('/permohonan_izin_belajar/destroy/{id}', [IzinBelajarController::class, 'destroy']);

    //route for tugas/mutasi
    Route::get('/mutasi', [MutasiController::class, 'index']);
    Route::get('/mutasi/create', [MutasiController::class, 'create']);
    Route::post('/mutasi/create/store', [MutasiController::class, 'store']);
    Route::get('/mutasi/show/{id}', [MutasiController::class, 'show']);
    Route::delete('/mutasi/destroy/{id}', [MutasiController::class, 'destroy']);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Admin\DashboardController::class);

    //route for izin belajar
    Route::get('/permohonan_izin_belajar', [Admin\IzinBelajarController::class, 'index']);
    Route::get('/permohonan_izin_belajar/{value}', [Admin\IzinBelajarController::class, 'index']);
    Route::get('/permohonan_izin_belajar/show/{id}', [Admin\IzinBelajarController::class, 'show']);
    Route::put('/permohonan_izin_belajar/update/{id}', [Admin\IzinBelajarController::class, 'update']);

    //route for mutasi
    Route::get('/mutasi', [Admin\MutasiController::class, 'index']);
    Route::get('/mutasi/{value}', [Admin\MutasiController::class, 'index']);
    Route::get('/mutasi/show/{id}', [Admin\MutasiController::class, 'show']);
    Route::put('/mutasi/update/{id}', [Admin\MutasiController::class, 'update']);
});

Route::middleware(['auth', 'super_admin'])->prefix('super_admin')->group(function () {
    Route::get('/dashboard', Superadmin\DashboardController::class);

    Route::get('/permohonan', [Superadmin\PermohonanController::class, 'index']);
    Route::get('/permohonan/show/{id}', [Superadmin\PermohonanController::class, 'show']);
    Route::get('/permohonan/waiting_sign', [Superadmin\PermohonanController::class, 'waiting_sign']);
    Route::get('/permohonan/signed', [Superadmin\PermohonanController::class, 'signed']);
    Route::get('/permohonan/rejected', [Superadmin\PermohonanController::class, 'rejected']);

    Route::get('/tte', [Superadmin\TTEController::class, 'index']);
    Route::get('/tte/show/{id}', [Superadmin\TTEController::class, 'show']);

    //users
    Route::get('/user/show/{id}', [Superadmin\UserController::class, 'show']);

    //notif
    Route::get('/notification', Superadmin\NotifController::class);

    // Route::middleware('cors')->get('/status/user', [Api\TestController::class, 'index']);
});
