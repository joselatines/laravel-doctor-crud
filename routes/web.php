<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/patients', [PatientController::class, 'show'])->name('dashboard.patients');
Route::get('/dashboard/patients/create', [PatientController::class, 'create'])->name('dashboard.patients.create');
Route::post('/dashboard/patients/create', [PatientController::class, 'create'])->name('dashboard.patients.create');
Route::patch('/dashboard/patients/edit/{id}', [PatientController::class, 'update'])->name('dashboard.patients.edit');
Route::get('/dashboard/patients/edit/{id}', [PatientController::class, 'update'])->name('dashboard.patients.edit');
Route::delete('/dashboard/patients/destroy/{id}', [PatientController::class, 'destroy'])->name('dashboard.patients.destroy');

Route::resource('consultations', ConsultationController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
