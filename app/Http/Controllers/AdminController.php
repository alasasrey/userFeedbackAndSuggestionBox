<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Suggestion;
use App\Models\Service;



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

    public function services()
    {
        $services = Service::all();
        return view('admin.services', compact('services'));
    }

    public function suggestions()
    {
        $suggestions = Suggestion::with('user')->latest()->get();
        return view('admin.suggestions', compact('suggestions'));
    }


    //feedback
    public function editFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.editFeedback', compact('feedback'));
    }

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

    public function deleteFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.feedback')->with('success', 'Feedback deleted successfully.');
    }

    //services
    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.editService', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $request->validate([
            'service' => 'required|string|max:255',
        ]);
        $service->update(['service' => $request->service]);
        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Service deleted.');
    }

    //suggestions
    public function deleteSuggestion($id)
    {
        $suggestion = Suggestion::findOrFail($id);
        $suggestion->delete();
        return back()->with('success', 'Suggestion deleted.');
    }
}
