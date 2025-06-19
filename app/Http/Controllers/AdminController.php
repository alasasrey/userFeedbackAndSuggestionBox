<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Suggestion;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function feedback()
    {
        $feedbacks = Feedback::with('service', 'user')->get();
        $suggestions = Suggestion::with('user')->get();

        return view('admin.feedback', compact('feedbacks', 'suggestions'));
    }

    // View edit form
    public function editFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.editFeedback', compact('feedback'));
    }

    // Handle update
    public function updateFeedback(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string',
            'suggestions' => 'nullable|string',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($request->all());

        return redirect()->route('admin.feedback')->with('success', 'Feedback updated successfully.');
    }

    // Delete
    public function deleteFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.feedback')->with('success', 'Feedback deleted successfully.');
    }

}
