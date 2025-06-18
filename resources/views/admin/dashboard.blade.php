@extends('layouts.app') {{-- or your layout --}}
@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome, admin!</p>
    <a href="{{ route('admin.feedback') }}">View Feedback</a>
@endsection
