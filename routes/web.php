<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');
    Route::get('/ranking/ver-mais', [RankingController::class, 'index'])->name('ranking.more');
    Route::get('/ranking/meu', [RankingController::class, 'myRanking'])->name('ranking.more-user');

    Route::get('/quiz/start', [QuizController::class, 'start'])->name('quiz.start'); 
    Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.index');
    Route::post('/quiz/{id}/result', [QuizController::class, 'store'])->name('quiz.store');
});

require __DIR__ . '/auth.php';
