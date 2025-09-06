<h2>Register Page</h2>

<form action="{{ route('auth.postregis') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Username" maxlength="100">
    <input type="text" name="name" placeholder="Your Name" maxlength="100">
    <input type="number" name="age" placeholder="Age">
    <input type="email" name="email" placeholder="your@gmail.com">
    <input type="password" name="password" placeholder="***">
    <br>
    <button type="submit">Register</button>
</form>
<br>
have an account? <a href="{{ route('auth.login') }}">login</a>
