@extends('app')

@section('content')
    <h2>Edit Service</h2>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Service Name</label>
        <input type="text" name="service" value="{{ $service->service }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
