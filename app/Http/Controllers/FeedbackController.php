<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('feedback.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'username' => 'nullable|string|max:255',
        ]);

        Feedback::create([
            'username' => $request->username ?: 'Anonymous',
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
