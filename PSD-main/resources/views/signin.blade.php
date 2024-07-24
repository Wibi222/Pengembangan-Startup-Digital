<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="signin-form">
            <h2>Masuk</h2>
            <form action="{{ route('signin') }}" method="POST">
                @csrf
                <label for="username">Nama Pengguna:</label>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Sandi:</label>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Masuk">
            </form>
            <p>Belum punya akun? <a href="{{ url('signup') }}">Daftar</a></p>
        </div>
    </div>
</body>
</html>
