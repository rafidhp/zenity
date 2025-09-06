<h2>Login Page</h2>

<form action="{{ route('auth.postlogin') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="***" />
    <button type="submit">Login</button>
</form>
<br>
<a href="{{ route('dashboard') }}">Back</a>
