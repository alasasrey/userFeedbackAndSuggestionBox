@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Feedback</h2>

    <form action="{{ route('admin.feedback.update', $feedback->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $feedback->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $feedback->email }}" required>
        </div>

        <div class="mb-3">
            <label>Service</label>
            <input type="text" name="service" class="form-control" value="{{ $feedback->service }}" required>
        </div>

        <div class="mb-3">
            <label>Rating</label>
            <input type="number" name="rating" class="form-control" value="{{ $feedback->rating }}" min="1" max="5" required>
        </div>

        <div class="mb-3">
            <label>Feedback</label>
            <textarea name="feedback" class="form-control" required>{{ $feedback->feedback }}</textarea>
        </div>

        <div class="mb-3">
            <label>Suggestions</label>
            <textarea name="suggestions" class="form-control">{{ $feedback->suggestions }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Feedback</button>
    </form>
</div>
@endsection
