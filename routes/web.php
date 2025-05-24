<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\DashboardController as StaffDashboard;
use App\Http\Controllers\Mahasiswa\DashboardController as MahasiswaDashboard;
use App\Http\Controllers\Mahasiswa\MahasiswaRegisterController as MahasiswaRegister;
use App\Http\Controllers\Mahasiswa\MahasiswaLoginController as MahasiswaLogin;
use App\Http\Controllers\Staff\StaffRegisterController as StaffRegister;
use App\Http\Controllers\Staff\StaffLoginController as StaffLogin;

//Mahasiswa Auth
Route::get('mahasiswa/register', [MahasiswaRegister::class, 'index'])->name('mahasiswa.register.page');
Route::post('mahasiswa/register', [MahasiswaRegister::class, 'register'])->name('mahasiswa.register.post');
Route::get('mahasiswa/login', [MahasiswaLogin::class, 'index'])->name('mahasiswa.login.page');
Route::post('mahasiswa/login', [MahasiswaLogin::class, 'login'])->name('mahasiswa.login.post');
Route::post('mahasiswa/logout', [MahasiswaLogin::class, 'logout'])->name('mahasiswa.logout');

//Staff Auth
Route::get('staff/register', [StaffRegister::class, 'index'])->name('staff.register.page');
Route::post('staff/register', [StaffRegister::class, 'register'])->name('staff.register.post');
Route::get('staff/login', [StaffLogin::class, 'index'])->name('staff.login.page');
Route::post('staff/login', [StaffLogin::class, 'login'])->name('staff.login.post');
Route::post('staff/logout', [StaffLogin::class, 'logout'])->name('staff.logout');

Route::get('/', [MahasiswaDashboard::class, 'index'])->name('mahasiswa.dashboard');
Route::get('/staff', [StaffDashboard::class, 'index'])->name('staff.dashboard');


