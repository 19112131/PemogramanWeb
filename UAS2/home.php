<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            background-image: url('pict/people-festival_1160-736.png');
            background-size: cover;
            background-position: center;
        }

        .login-container {
            background-color: #ffff;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
        width: 200px; /* Sesuaikan lebar logo dengan kebutuhan */
        height: auto; /* Sesuaikan tinggi logo dengan kebutuhan */
        margin-bottom: 10px; /* Atur jarak antara logo dan heading */
        } 

        h3 {
            margin-top: 0;
            margin-bottom: 10px;
            display: flex;
            width: 123.565px;
            height: 53.053px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 10px;
            
        }

        .form-group label {
            display: flex;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #D5D5D5;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: #d9d9d9;
            color: #000;
            border-radius: 32.5px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #8968B2;
        }

        .notification {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="pict\6.2.png" alt="Logo" class="logo">
        <h3>Sign In</h3>
        <!-- notifikasi -->
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo '<div class="notification">Login gagal! username dan password salah!</div>';
            }
            else if($_GET['pesan'] == "logout"){
                echo '<div class="notification">Logout Succesfully! Bye Biatch:)</div>';
            }
            else if($_GET['pesan'] == "belum login"){
                echo '<div class="notification">Need Login to Access Admin Page, Bruh!</div>';
            }
        }
        ?>
        <br/>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="login">
            </div>
        </form>
    </div>
</body>
</html>
