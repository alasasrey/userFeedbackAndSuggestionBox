<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback & Suggestions</title>
</head>
<body>

<div class="feedback-container">
    <h2>Feedback & Suggestions</h2>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('feedback.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Your Username (optional)</label>
            <input type="text" id="username" name="username" placeholder="Anonymous">
        </div>

        <div class="form-group">
            <label for="message">Your Feedback *</label>
            <textarea id="message" name="message" required placeholder="Enter your feedback here..."></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
