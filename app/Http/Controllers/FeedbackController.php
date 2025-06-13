<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        // Fetch all feedbacks from the database, newest first
        $feedbacks = Feedback::latest()->get();
        // Pass the $feedbacks to the view
        return view('feedback', compact('feedbacks'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Feedback::create($validated);

        return redirect('/feedback')->with('success', 'Thank you for your feedback!');
    }
}
