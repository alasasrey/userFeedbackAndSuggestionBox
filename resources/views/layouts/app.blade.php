{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
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
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Embedded CSS: shared styles -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header, footer {
            background-color: #0e4d92;
            color: white;
            padding: 1rem 2rem;
        }
        main {
            padding: 2rem;
        }
        .container {
            max-width: 960px;
            margin: auto;
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .btn {
            background-color: #0e4d92;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #093b6e;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        input, textarea, select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 1rem;
            border: 1px solid #eee;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <a href="{{ url('/admin') }}" class="btn">Dashboard</a> |
            <a href="{{ route('admin.feedback') }}" class="btn">Feedback</a> |
            <form method="POST" action="/logout" style="display:inline;">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>
        </nav>
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 🧺 Fresh Clean</p>
    </footer>
</body>
</html>
