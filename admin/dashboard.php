<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$loginSuccessMessage = "";
if (isset($_SESSION['login_success'])) {
    $loginSuccessMessage = $_SESSION['login_success'];
    unset($_SESSION['login_success']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sahabat Ngemil</title>
    <style>
        body {
            display: flex;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .sidebar {
            width: 250px;
            background-color: #8a2be2;
            color: white;
            padding-top: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
            padding: 15px 0;
        }

        .logo img {
            width: 140px;
            height: 70px;
            margin-bottom: 10px;
            display: block;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo h1 {
            font-size: 18px;
            margin: 0;
            color: white;
            font-weight: bold;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 2px;
        }

        .sidebar ul li a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
            border-left: 3px solid transparent;
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            background-color: #ff69b4;
            border-left-color: #fff;
        }

        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        header {
            background-color: #ff69b4;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h2 {
            margin: 0;
            font-size: 24px;
            color: white;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #8a2be2;
        }

        .about_section_2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .about_taital_box {
            flex: 1;
            padding: 20px;
        }

        .about_taital_1 {
            color: #8a2be2;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .about_text {
            color: #666;
            line-height: 1.6;
        }

        .about_img {
            max-width: 300px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            opacity: 1;
            transition: opacity 0.1s ease-in-out;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../images/logo1.png" alt="Sahabat Ngemil Logo">
            <h1>Sahabat Ngemil</h1>
        </div>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="postingan.php">Postingan</a></li>
            <li><a href="messages.php">Pesan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h2>Welcome to Sahabat Ngemil Admin Dashboard</h2>
        </header>
        <?php if ($loginSuccessMessage): ?>
            <div class="success-message" id="success-message">
                <?= htmlspecialchars($loginSuccessMessage) ?>
            </div>
        <?php endif; ?>
        <div class="about_section_2">
            <div class="image_iman">
                <img src="../img/bg_shbt.png" class="about_img" alt="Background Sahabat Ngemil">
            </div>
            <div class="about_taital_box">
                <h1 class="about_taital_1">Sahabat Ngemil</h1>
                <p class="about_text">
                    "Sahabat Ngemil" adalah penjual camilan yang menawarkan berbagai jenis basreng dan keripik pisang. Meskipun merupakan produksi kecil, kami berkomitmen untuk menyediakan camilan yang lezat dan berkualitas. Basreng kami gurih dan renyah, sementara keripik pisang kami manis dan memuaskan. Kami menggunakan bahan-bahan pilihan dan memproses setiap produk dengan cermat untuk memastikan rasa dan kualitas terbaik. "Sahabat Ngemil" hadir untuk menemani waktu santai Anda dengan camilan yang nikmat dan menggugah selera.
                </p>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 Sahabat Ngemil. All rights reserved.
    </footer>
    <script>
        // JavaScript to fade out the success message after 5 seconds
        window.onload = function() {
            setTimeout(function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.style.opacity = '0';
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 2000);
                }
            }, 5000);
        }
    </script>
</body>
</html>
