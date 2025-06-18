@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All User Feedback</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Rating</th>
                <th>Feedback</th>
                <th>Suggestions</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($feedbacks as $fb)
                <tr>
                    <td>{{ $fb->name }}</td>
                    <td>{{ $fb->email }}</td>
                    <td>{{ $fb->service }}</td>
                    <td>{{ $fb->rating }} ⭐</td>
                    <td>{{ $fb->feedback }}</td>
                    <td>{{ $fb->suggestions ?? '—' }}</td>
                    <td>{{ $fb->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr><td colspan="7">No feedback found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
