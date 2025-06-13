<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('feedback');
});

Route::get('/feedbackDisplay', function () {
    return view('feedbackDisplay');
});

Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'store']);
