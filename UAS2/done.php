<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Berhasil</title>
    <style>
    body {
        font-family: 'poppins', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        font-style: normal;
        line-height: normal;
    }
    .navbar {
            background-color: transparent; /* Atur warna latar belakang navbar sesuai kebutuhan */
            padding: 0px 0; /* Sesuaikan padding atas dan bawah sesuai kebutuhan */
        }
        
        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .navbar-brand {
            font-size: 24px; /* Sesuaikan ukuran font sesuai kebutuhan */
        }
        .nav-menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 20px;
            font-style: normal;
            font-weight: bold;
            line-height: normal;
        }
        .nav-link {
            color: #000;
            text-decoration: none;
            padding: 10px;
        }
        .nav-menu li {
            margin-left: 15px; /* Sesuaikan dengan jarak antara item menu */
        }
        .nav-menu li:first-child {
            margin-left: 0; /* Menghilangkan margin pada item menu pertama */
        }

    .selesai {
        background-color: #ffff;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
    }
    h1 {
    font-size: 48px;
    margin-bottom: 20px;
    }
    p {
    font-size: 20px;
    margin-bottom: 20px;
    }
    button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #1B0027;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 20px;
    }

    button:hover {
    background-color: #8968B2;
    }
    footer {
            background-color: #443459;
            padding: 20px 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer-content {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer-links {
            list-style: none;
            padding: 10px;
            display: flex;
            justify-content: center;
            font-family: 'poppins', sans-serif;
            font-weight: bold;
            color: #FFF;
        }
        .footer-links li {
            margin: 0 10px;
        }
        .footer-links li:first-child {
            margin-left: 0;
        }
        .footer-links li:last-child {
            margin-right: 0;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
        }
        .footer-copyright {
            text-align: center;
            font-family: 'poppins', sans-serif;
            font: 8px;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="pict/6.2.png" alt="GIGSVIBE" width="189" height="50" class="d-inline-block align-text-top">
                </a>
            </div>
                <ul class="nav-menu">
                    <!-- <li><a class='nav-link' href="#event">Events</a></li> -->
                    <li><a class='nav-link' href="tiket.php">Tickets</a></li>
                    <li><a class='nav-link' href="#kontak">Contact</a></li>
                    <li><a class='nav-link' href="akun.php">Account</a></li>
                </ul>
        </div>
    </nav>
    </div class="selesai">
        <h1>Pembayaran Berhasil</h1>
        <p>Tiket akan dikirim ke Email Anda dalam 2x24 jam.</p>
        <a href="index.php"><button>Kembali ke Beranda</button></a><br><br><br>
    <div>
    <footer>
        <div id="kontak" class="container">
            <div class="footer-content">
            <img src="pict/gig putih.png" alt="GIGSVIBE" width="189" height="50">
            <ul class="footer-links">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Phone</a></li>
            </ul>
            </div>
            <p class="footer-copyright">
            &copy; 2023 GIGSVIBE. Hak cipta dilindungi.
            </p>
        </div>
    </footer>
</body>
</html>
