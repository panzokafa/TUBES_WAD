<!DOCTYPE html>
<html>
<head>
    <title>Login Staff</title>
</head>
<body>
    <h2>Login Staff</h2>
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('staff.login.post') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="{{ route('staff.register.page') }}">Register</a></p>
</body>
</html>
