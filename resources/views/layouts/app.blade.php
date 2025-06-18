<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Optional --}}
</head>
<body>
    <header>
        <h2>Admin Panel</h2>
        <nav>
            <a href="{{ url('/admin') }}">Dashboard</a> |
            <a href="{{ route('admin.feedback') }}">Feedback</a> |
            <form method="POST" action="/logout" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
