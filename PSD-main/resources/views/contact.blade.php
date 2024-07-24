<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/ssstyle.css') }}">
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <h2>Hubungi Kami</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="subject">Subjek:</label>
                <input type="text" id="subject" name="subject"><br><br>
                <label for="message">Pesan:</label>
                <textarea id="message" name="message"></textarea><br><br>
                <input type="submit" value="Kirim Pesan">
            </form>
            <p>Atau, Anda dapat menghubungi kami melalui:</p>
            <ul>
                <li>Telepon: +62 888 222 555 44</li>
                <li>Email: SmartPeopleThrift@yahoo.com</li>
                <li>Alamat: Jl. Bersamamu, No. 123, Semarang, Indonesia</li>
            </ul>
        </div>
    </div>
</body>
</html>
