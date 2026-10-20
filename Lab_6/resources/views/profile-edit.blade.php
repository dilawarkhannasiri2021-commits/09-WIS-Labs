
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

    <h1>Edit My Profile</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', Auth::user()->name) }}"
                required
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', Auth::user()->email) }}"
                required
            >
        </div>

        <br>

        <button type="submit">Save Changes</button>
    </form>

    <p><a href="{{ route('profile') }}">Cancel</a></p>

</body>
</html>
