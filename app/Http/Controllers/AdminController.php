<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Suggestion;
use App\Models\Service;
use App\Models\User;



class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $feedbacks = Feedback::with(['user', 'service', 'suggestion'])->get();
        $services = Service::all();
        $suggestions = Suggestion::with('user')->get();

        return view('admin.dashboard', compact('users', 'feedbacks', 'services', 'suggestions'));
    }

    public function edit($id)
    {
        $feedbacks = Feedback::with(['user', 'service', 'suggestion'])->findOrFail($id);
        $services = Service::all();
        $suggestions = Suggestion::with('user')->get();

        return view('admin.editDashboard', compact('feedbacks', 'services', 'suggestions'));
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::with(['suggestion', 'user'])->findOrFail($id);

        $request->validate([
            'service_id' => 'required|exists:services,id',
            'rating'     => 'required|integer|min:1|max:5',
            'feedback'   => 'required|string',
            'name'       => 'required|string|max:255',
            'email'      => 'required|email',
            'suggestion' => 'nullable|string',
        ]);

        //Update feedback & service
        $feedback->update([
            'rating'     => $request->rating,
            'feedback'   => $request->feedback,
            'service_id' => $request->service_id,
        ]);

        //Update the suggestion text or create one if missing
        if ($feedback->suggestion) {
            $feedback->suggestion->update([
                'suggestion' => $request->suggestion
            ]);
        } elseif ($request->filled('suggestion')) {
            $feedback->suggestion()->create([
                'user_id'    => $feedback->user_id,
                'suggestion' => $request->suggestion,
            ]);
        }

        //Update the user profile fields (name/email)
        if ($feedback->user) {
            $feedback->user->update([
                'name'  => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('admin.dashboard')
            ->with('success', 'Feedback (and its service, suggestion, user details) updated successfully!');
    }


    public function delete($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Feedback deleted successfully.');
    }
}
