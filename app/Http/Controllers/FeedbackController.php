<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Service;
use App\Models\Suggestion;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with(['user', 'service', 'suggestions'])->latest()->get();

        return view('home', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string',
            'suggestions' => 'nullable|string',
        ]);

        $user = Auth::user();

        // Create or find the service
        $service = Service::firstOrCreate([
            'service' => $request->service,
            'user_id' => $user->id
        ]);

        //create suggestion first, if filled
        $suggestionId = null;
        if ($request->filled('suggestions')) {
            $suggestion = Suggestion::create([
                'user_id' => $user->id,
                'suggestion' => $request->suggestions,
            ]);
            $suggestionId = $suggestion->id;
        }

        Feedback::create([
            'user_id' => $user->id,
            'service_id' => $service->id,
            'suggestion_id' => $suggestionId,
            'rating' => $request->input('rating'),
            'feedback' => $request->input('feedback')
        ]);

        return redirect('/home')->with('success', 'Feedback submitted successfully!');
    }
}
