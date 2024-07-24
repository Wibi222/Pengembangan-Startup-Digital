<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart People Shop</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
        }

        .hero {
            background-color: #fff;
            padding: 80px;
            text-align: center;
        }

        .hero-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .product {
            width: 250px;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .product-img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .product-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-price {
            color: #333;
        }

        .call-to-action {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }

        .call-to-action-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .call-to-action-btn {
            background-color: #fff;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .footer-text {
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Smart People Shop</h1>
            <nav class="nav-links">
                <a href="{{ url('signin') }}" class="nav-link">Masuk</a>
                <a href="{{ url('signup') }}" class="nav-link">Daftar</a>
                <a href="{{ url('cart') }}" class="cart-icon" data-count="0">&#128722;</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <h1 class="hero-title">Gaya Cerdas</h1>
        <h2 class="hero-subtitle">Untuk Pembeli Yang Cerdas</h2>
    </section>

    <section class="products">
        <div class="product">
            <img src="{{ asset('storage/images/nike.jpg') }}" alt="Product 1" class="product-img">
            <h3 class="product-title">Nike Air Max</h3>
            <p class="product-price">IDR 500.000</p>
        </div>
        <div class="product">
            <img src="{{ asset('storage/images/tnf.jpg') }}" alt="Product 2" class="product-img">
            <h3 class="product-title">The North Face</h3>
            <p class="product-price">IDR 200.000</p>
        </div>
        <div class="product">
            <img src="{{ asset('storage/images/kenzo.jpeg') }}" alt="Product 3" class="product-img">
            <h3 class="product-title">Kaos Kenzo</h3>
            <p class="product-price">IDR 575.000</p>
        </div>
        <div class="product">
            <img src="{{ asset('storage/images/trasher.jpg') }}" alt="Product 4" class="product-img">
            <h3 class="product-title">Hoodie Trasher</h3>
            <p class="product-price">IDR 180.000</p>
        </div>
        <div class="product">
            <img src="{{ asset('storage/images/kacamata.jpeg') }}" alt="Product 5" class="product-img">
            <h3 class="product-title">Kacamata Skena</h3>
            <p class="product-price">IDR 150.000</p>
        </div>
        <div class="product">
            <img src="{{ asset('storage/images/warrior.jpg') }}" alt="Product 6" class="product-img">
            <h3 class="product-title">Kaos Vintage</h3>
            <p class="product-price">IDR 685.000</p>
        </div>
        <a href="{{ url('selengkapnya') }}" class="call-to-action-btn">Selengkapnya</a>
    </section>

    <section class="call-to-action">
        <p>Stay Tuned</p>
        <p>Daftar dan dapatkan informasi terkini untuk produk kebanggaan baru kami!</p>
        <a href="{{ url('contactus') }}" class="call-to-action-btn">Hubungi Kami</a>
        <a href="{{ url('signup') }}" class="call-to-action-btn">Daftar</a>
    </section>

    <footer class="footer">
        <p class="footer-text">&copy; 2023 Smart People Shop. All rights reserved.</p>
    </footer>

</body>
</html>
