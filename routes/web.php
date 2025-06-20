<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showSignup']);
Route::post('/signup', [AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        $feedbacks = Feedback::latest()->get(); 
        return view('home', compact('feedbacks'));
    });
    Route::post('/feedback', [FeedbackController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

//TODO: FIX THE ADMIN DASHBOARD!!!!!
Route::middleware([
    \Illuminate\Auth\Middleware\Authenticate::class,
    AdminMiddleware::class,
    ])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard/{id}/edit', [AdminController::class, 'edit'])->name('admin.dashboard.edit');
    Route::put('/admin/dashboard/{id}', [AdminController::class, 'update'])->name('admin.dashboard.update');
    Route::delete('/admin/dashboard/{id}', [AdminController::class, 'delete'])->name('admin.dashboard.delete');
});

