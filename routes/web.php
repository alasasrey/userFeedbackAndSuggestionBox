<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use App\Http\Middleware\AdminMiddleware;

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




