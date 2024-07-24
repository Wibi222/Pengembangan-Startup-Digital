<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="{{ asset('css/sstyle.css') }}">
</head>
<body>
	<div class="container">
		<div class="signup-form">
			<h2>Daftar</h2>
			<form action="{{ route('signup') }}" method="POST">
                @csrf
				<label for="fullname">Nama Lengkap:</label>
				<input type="text" id="fullname" name="fullname"><br><br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br><br>
				<label for="username">Nama Pengguna:</label>
				<input type="text" id="username" name="username"><br><br>
				<label for="password">Sandi:</label>
				<input type="password" id="password" name="password"><br><br>
				<label for="confirm-password">Konfirmasi Sandi:</label>
				<input type="password" id="confirm-password" name="confirm-password"><br><br>
				<input type="submit" value="Daftar">
			</form>
			<p>Sudah memiliki akun? <a href="{{ url('signin') }}">Masuk</a></p>
		</div>
	</div>
</body>
</html>
