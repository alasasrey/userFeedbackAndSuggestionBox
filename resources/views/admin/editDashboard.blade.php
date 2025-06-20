@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Record</h2>

    <form action="{{ route('admin.dashboard.update', $feedbacks->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- User Info -->
        <div class="mb-3">
            <label>User Name</label>
            <input type="text" name="name" class="form-control" value="{{ $feedbacks->user->name ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $feedbacks->user->email ?? '' }}" required>
        </div>

        <!-- Service -->
        <div class="mb-3">
            <label>Service</label>
            <select name="service_id" class="form-control" required>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" {{ $feedbacks->service_id == $service->id ? 'selected' : '' }}>
                        {{ ucfirst($service->service) }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Rating -->
        <div class="mb-3">
            <label>Rating</label>
            <input type="number" name="rating" class="form-control" value="{{ $feedbacks->rating }}" min="1" max="5" required>
        </div>

        <!-- Feedback -->
        <div class="mb-3">
            <label>Feedback</label>
            <textarea name="feedback" class="form-control" required>{{ $feedbacks->feedback }}</textarea>
        </div>

        <!-- Suggestion -->
        <div class="mb-3">
            <label>Suggestion</label>
            <textarea name="suggestion" class="form-control">{{ $feedbacks->suggestion->suggestion ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>
@endsection
