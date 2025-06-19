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


Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware([
    \Illuminate\Auth\Middleware\Authenticate::class,
    AdminMiddleware::class,
])->group(function () {
    //Feedback
    Route::get('/admin/feedback', [AdminController::class, 'feedback'])->name('admin.feedback');
    Route::get('/admin/feedback/{id}/edit', [AdminController::class, 'editFeedback'])->name('admin.feedback.edit');
    Route::put('/admin/feedback/{id}', [AdminController::class, 'updateFeedback'])->name('admin.feedback.update');
    Route::delete('/admin/feedback/{id}', [AdminController::class, 'deleteFeedback'])->name('admin.feedback.delete');

    
    //Services
    Route::get('/admin/services', [AdminController::class, 'services'])->name('admin.services');
    Route::get('/admin/services/{id}/edit', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::put('/admin/services/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
    Route::delete('/admin/services/{id}', [AdminController::class, 'deleteService'])->name('admin.services.delete');
    
    //Suggestions delete only for now
    Route::get('/admin/suggestions', [AdminController::class, 'suggestions'])->name('admin.suggestions');
    Route::delete('/admin/suggestions/{id}', [AdminController::class, 'deleteSuggestion'])->name('admin.suggestions.delete');

});
