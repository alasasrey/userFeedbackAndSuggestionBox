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
                @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->service }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->feedback }}</td>
                    <td>{{ $feedback->suggestions }}</td>
                    <td>
                        <a href="{{ route('admin.feedback.edit', $feedback->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('admin.feedback.delete', $feedback->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this feedback?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @empty
                <tr><td colspan="7">No feedback found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
