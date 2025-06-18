<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'service'     => 'required|string',
            'rating'      => 'required|integer|min:1|max:5',
            'feedback'    => 'required|string',
            'suggestions' => 'nullable|string',
        ]);

        Feedback::create([
            'user_id'     => Auth::id(),
            'name'        => $request->name,
            'email'       => $request->email,
            'service'     => $request->service,
            'rating'      => $request->rating,
            'feedback'    => $request->feedback,
            'suggestions' => $request->suggestions,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }

}
