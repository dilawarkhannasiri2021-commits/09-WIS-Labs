
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - IT Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        a {
            display: inline-block;
            margin: 10px 10px 10px 0;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>My Profile</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>

    <hr>

    <a href="{{ route('profile.edit') }}">Edit Profile</a>

    <a href="{{ route('password.change') }}">Change Password</a>

    <p>
        <a href="{{ route('dashboard') }}">Back to Dashboard</a>
    </p>

</div>

</body>
</html>
