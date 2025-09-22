<?php
// filepath: routes/api.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrestamoControl;

Route::get('/usuarios', [UserController::class, 'index'])->name('api.usuarios');
Route::get('/prestamos', [PrestamoControl::class, 'index'])->name('api.prestamos');
