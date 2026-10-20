
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 40px 15px;
        }
        .container {
            max-width: 420px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px #0001;
        }
        h1 { text-align: center; color: #1d4ed8; }
        label { display: block; margin-top: 15px; }
        input {
            box-sizing: border-box;
            width: 100%;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 22px;
            background: #2563eb;
            color: white;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }
        .error { color: #dc2626; }
        .success { color: #15803d; }
        .link { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Student Login</h1>
    <p>Login to access your student dashboard.</p>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <label for="email">Email Address</label>
        <input id="email" type="email" name="email"
               value="{{ old('email') }}" required>

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <p class="link">
        Don't have an account?
        <a href="{{ route('register') }}">Register here</a>
    </p>
</div>
</body>
</html>
