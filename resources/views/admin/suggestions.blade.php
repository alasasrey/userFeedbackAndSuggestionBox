@extends('app')

@section('content')
    <h2>Suggestions</h2>

    @forelse ($suggestions as $suggestion)
        <div>
            <p><strong>{{ $suggestion->user->name ?? 'Anonymous' }}</strong>: {{ $suggestion->suggestion }}</p>
            <form action="{{ route('admin.suggestions.delete', $suggestion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this suggestion?')">Delete</button>
            </form>
        </div>
    @empty
        <p>No suggestions available.</p>
    @endforelse
@endsection
