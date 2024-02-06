<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillDescriptionController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants.index');
    Route::get('/applicants/{id}', [ApplicantController::class, 'show'])->name('applicants.show');
    Route::get('/applicants/{id}/edit', [ApplicantController::class, 'edit'])->name('applicants.edit');
    Route::post('/applicants/{id}/update', [ApplicantController::class, 'update'])->name('applicants.update');
    Route::resource('skills', SkillController::class);
    Route::resource('company', CompanyController::class)->except(['show']);
    Route::resource('summary', SkillDescriptionController::class)->except(['show']);
});
Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/prerequisite-data', [AppController::class, 'prerequisiteData']);
    Route::get('/app', [AppController::class, 'app'])->name('app');
    Route::post('/app', [AppController::class, 'store']);
});
