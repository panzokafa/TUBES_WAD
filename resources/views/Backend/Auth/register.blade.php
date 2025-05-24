<!DOCTYPE html>
<html>
<head>
    <title>Register Staff</title>
</head>
<body>
    <h2>Register Staff</h2>
    <form method="POST" action="{{ route('staff.register.post') }}">
        @csrf
        <input type="text" name="nama_staff" placeholder="Nama Staff" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('staff.login.page') }}">Login</a></p>
</body>
</html>
