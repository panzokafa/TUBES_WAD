<!DOCTYPE html>
<html>
<head>
    <title>Register Mahasiswa</title>
</head>
<body>
    <h2>Register Mahasiswa</h2>
    <form method="POST" action="{{ route('mahasiswa.register.post') }}">
        @csrf
        <input type="text" name="nim" placeholder="NIM" required><br>
        <input type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('mahasiswa.login.page') }}">Login</a></p>
</body>
</html>
