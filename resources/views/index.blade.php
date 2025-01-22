<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPOSITORY STIPER SANTO THOMAS AQUINAS JAYAPURA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Header Styles */
        header {
            background-color: #5c2d91; /* Warna ungu */
            color: white;
            padding: 20px;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .header-left img {
            width: 100px; /* Ukuran logo */
            margin-right: 20px;
        }

        .header-left h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            white-space: nowrap;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .header-right .line {
            width: 2px;
            height: 40px;
            background-color: white;
            margin: 0 20px;
        }

        .header-right h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        /* Search Container Styles */
        .search-container {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .search-container h2 {
            text-align: center;
            color: #5c2d91;
        }

        .search-container form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .search-container select,
        .search-container input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 45%;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #f4b400; /* Warna kuning */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #e09e00;
        }

        /* Footer Styles */
        footer {
            background-color: #5c2d91;
            color: white;
            padding: 20px 10px;
            font-size: 0.9em;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 900px;
            margin: 0 auto;
        }

        .footer-links h4 {
            margin-bottom: 10px;
            font-size: 1em;
            font-weight: 600;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links ul li {
            margin-bottom: 5px;
        }

        .footer-links ul li a {
            color: #ffdd00;
            text-decoration: none;
        }

        .footer-links ul li a:hover {
            text-decoration: underline;
        }

        .contact-info {
            text-align: left;
            line-height: 1.5;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #fff; /* Garis tipis di atas */
            margin-top: 10px;
            padding-top: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<header>
    <div class="header-container">
        <div class="header-left">
            <img src="img/logo-stiper.png" alt="Logo STIPER Santo Thomas">
            <h2>STIPER SANTO THOMAS AQUINAS JAYAPURA</h2>
        </div>
        <div class="header-right">
            <div class="line"></div>
            <h1>REPOSITORY</h1>
        </div>
    </div>
</header>

<div class="search-container">
    <h2>Pencarian Katalog</h2>
    <form action="#" method="GET">
        <select name="category">
            <option value="">-- Semua Kategori --</option>
        </select>
        <input type="text" name="query" placeholder="Masukkan kata kunci...">
        <button type="submit">Cari</button>
    </form>
</div>

<footer>
    <div class="footer-container">
        <div class="footer-links">
            <h4>About</h4>
            <ul>
                <li><a href="#">Versi Indonesia</a></li>
                <li><a href="#">Versi English</a></li>
            </ul>
        </div>
        <div class="contact-info">
            <strong>STIPER SANTO THOMAS</strong><br>
            Jalan Akuatan-Kemiri I No 04,<br>
            Hinekombe, Sentani, Kabupaten Jayapura, Papua 99352<br>
            ☎️ +62812-4806-7755<br>
            ✉️ stiper143010@stipersta.ac.id
        </div>
    </div>
    <div class="copyright">
        &copy; 2024 Kampus STIPER. All Rights Reserved.
    </div>
</footer>

</body>
</html>
