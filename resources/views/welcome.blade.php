<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zenity</title>
</head>
<body>
    @if (Auth::check())
        <h2>Welcome {{ Auth::user()->name }}</h2>

        <a href="{{ route('auth.logout') }}">logout</a>
    @else
        <h2>Login first</h2>

        <a href="{{ route('auth.login') }}">login</a>
    @endif
</body>
</html>
