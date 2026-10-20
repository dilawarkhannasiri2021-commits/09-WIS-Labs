
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Student Portal - Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            background: #1e3a8a;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px #00000010;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px #00000010;
        }

        .card a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        button {
            background: #dc2626;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <nav>
        <h2>IT Student Portal</h2>

        <div>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile') }}">Profile</a>

            <form action="{{ route('logout') }}" method="POST"
                  style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container">

        <div class="welcome">
            <h1>Welcome, {{ Auth::user()->name }}!</h1>

            <p>You have successfully logged in to your student portal.</p>

            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>My Profile</h3>
                <p>View your personal information.</p>
                <a href="{{ route('profile') }}">Open Profile</a>
            </div>

            <div class="card">
                <h3>Edit Profile</h3>
                <p>Update your name and email.</p>
                <a href="{{ route('profile.edit') }}">Edit Information</a>
            </div>

            <div class="card">
                <h3>Security</h3>
                <p>Change your account password.</p>
                <a href="{{ route('password.change') }}">Change Password</a>
            </div>

        </div>

    </div>

</body>
</html>
