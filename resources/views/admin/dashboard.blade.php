@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Dashboard - All Data</h2>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Rating</th>
                <th>Feedback</th>
                <th>Suggestion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->user->name ?? 'N/A' }}</td>
                    <td>{{ $feedback->user->email ?? 'N/A' }}</td>
                    <td>{{ $feedback->service->service ?? 'N/A' }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->feedback }}</td>
                    <td>{{ $feedback->suggestion->suggestion ?? 'N/A' }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.dashboard.edit', $feedback->id) }}">Edit</a>
                        <form action="{{ route('admin.dashboard.delete', $feedback->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit" onclick="return confirm('Delete this data?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No Data found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
