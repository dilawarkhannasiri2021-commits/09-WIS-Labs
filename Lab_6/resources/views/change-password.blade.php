
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - IT Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px 20px;
        }

        .container {
            max-width: 450px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            box-sizing: border-box;
        }

        button {
            background: #1d4ed8;
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Change Password</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf

        <label for="current_password">Current Password</label>
        <input
            type="password"
            id="current_password"
            name="current_password"
            required
        >

        <br><br>

        <label for="password">New Password</label>
        <input
            type="password"
            id="password"
            name="password"
            minlength="8"
            required
        >

        <br><br>

        <label for="password_confirmation">Confirm New Password</label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            minlength="8"
            required
        >

        <br><br>

        <button type="submit">Change Password</button>
    </form>

    <p>
        <a href="{{ route('profile') }}">Back to Profile</a>
    </p>

</div>

</body>
</html>
