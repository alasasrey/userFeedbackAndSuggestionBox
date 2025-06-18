{{-- DO NOT DELETE THIS ORIGINAL CODE --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Feedback & Suggestion Box</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      min-height: 100vh;
      padding: 40px 20px;
    }

    .container {
      background-color: #fff;
      width: 100%;
      max-width: 600px;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      resize: vertical;
    }

    textarea {
      min-height: 100px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .success {
      text-align: center;
      font-size: 14px;
      color: green;
      margin-bottom: 15px;
    }

    .feedback-list {
      margin-top: 30px;
    }

    .feedback-card {
      background-color: #f9f9f9;
      padding: 15px;
      margin-bottom: 15px;
      border-left: 4px solid #007bff;
      border-radius: 8px;
    }

    .feedback-card h4 {
      margin-bottom: 5px;
      color: #007bff;
    }

    .feedback-card small {
      color: #999;
    }

    .feedback-card p {
      margin-top: 8px;
      color: #333;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>User Feedback & Suggestions</h2>

    @if(session('success'))
      <div class="success">{{ session('success') }}</div>
    @endif

    <form action="/feedback" method="post">
      @csrf
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="message">Your Feedback or Suggestion</label>
      <textarea id="message" name="message" placeholder="Write your feedback here..." required></textarea>

      <input type="submit" value="Submit">
    </form>

    @if(isset($feedbacks) && $feedbacks->count())
      <div class="feedback-list">
        <h3 style="margin-top: 30px; margin-bottom: 15px; color: #444;">Submitted Feedback</h3>
        @foreach($feedbacks as $feedback)
          <div class="feedback-card">
            <h4>{{ $feedback->name }}</h4>
            <small>{{ $feedback->email }} • {{ $feedback->created_at->format('F j, Y') }}</small>
            <p>{{ $feedback->message }}</p>
          </div>
        @endforeach
      </div>
    @endif
  </div>

</body>
</html> --}}
