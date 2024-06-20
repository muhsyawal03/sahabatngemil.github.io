<?php
require_once("../include/db.php");
require_once("../include/sessions.php");

// Proses penghapusan pesan jika ada permintaan
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $message_id = $_GET['delete'];
    $sql = "DELETE FROM messages WHERE id = $message_id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Pesan berhasil dihapus.";
    } else {
        $_SESSION['message'] = "Error menghapus pesan: " . $conn->error;
    }
    header("Location: messages.php");
    exit;
}

// Set pesan sebagai sudah dibaca jika ada permintaan
if (isset($_GET['mark_read']) && $_GET['mark_read'] == 'true') {
    $message_id = $_GET['id'];
    $sql = "UPDATE messages SET is_read = 1 WHERE id = $message_id";
    $conn->query($sql);
}

// Query untuk mengambil daftar pesan
$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);

$selected_message = null;
if (isset($_GET['id'])) {
    $selected_message_id = $_GET['id'];
    $sql_selected = "SELECT * FROM messages WHERE id = $selected_message_id";
    $result_selected = $conn->query($sql_selected);
    if ($result_selected->num_rows > 0) {
        $selected_message = $result_selected->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Sahabat Ngemil Admin Dashboard</title>
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
            background-color: #8a2be2; /* Warna ungu */
            color: white;
            padding-top: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto; /* Scroll jika terlalu panjang */
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1); /* Bayangan halus di samping */
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
            border-left: 3px solid transparent; /* Garis kiri transparan */
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            background-color: #ff69b4; /* Warna pink */
            border-left-color: #fff; /* Warna garis kiri saat hover */
        }

        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s; /* Transisi untuk animasi perpindahan konten */
        }

        header {
            background-color: #ff69b4; /* Warna pink */
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
            color: #8a2be2; /* Warna ungu */
        }

        .message-list {
            margin-top: 20px;
        }

        .message-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.2); /* Bayangan warna pink */
            margin-bottom: 20px;
            cursor: pointer; /* Menunjukkan bahwa elemen dapat diklik */
        }

        .message-item h3 {
            margin-top: 0;
            color: #8a2be2; /* Warna ungu */
        }

        .message-item p {
            color: #666;
            line-height: 1.6;
        }

        .message-detail {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.2); /* Bayangan warna pink */
            margin-top: 20px;
        }

        .message-detail h3 {
            margin-top: 0;
            color: #8a2be2; /* Warna ungu */
        }

        .message-detail p {
            color: #666;
            line-height: 1.6;
        }

        .message-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .message-table th, .message-table td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        .message-table th {
            background-color: #f2f2f2;
            color: #8a2be2;
            font-weight: bold;
        }

        .delete-button {
            background-color: #ff6347;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #ff4500;
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
    <script>
        function showMessageDetail(messageId) {
            window.location.href = '?id=' + messageId;
        }

        function confirmDelete(messageId) {
            if (confirm('Apakah Anda yakin ingin menghapus pesan ini?')) {
                window.location.href = '?delete=' + messageId;
            }
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../images/logo1.png" alt="Sahabat Ngemil Logo">
            <h1>Sahabat Ngemil</h1>
        </div>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="postingan.php">Postingan</a></li>
            <li><a href="messages.php">Pesan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h2>Messages</h2>
        </header>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='message-item'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']);
        }
        ?>
        <div class="message-list">
            <table class="message-table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $message_id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $created_at = $row['created_at'];
                            echo "<tr>";
                            echo "<td onclick='showMessageDetail($message_id)'>$name</td>";
                            echo "<td onclick='showMessageDetail($message_id)'>$email</td>";
                            echo "<td onclick='showMessageDetail($message_id)'>$created_at</td>";
                            echo "<td><button class='delete-button' onclick='confirmDelete($message_id)'>Hapus</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No messages.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
        if ($selected_message) {
            echo "<div class='message-detail'>";
            echo "<h3>From: " . $selected_message['name'] . " &lt;" . $selected_message['email'] . "&gt;</h3>";
            echo "<p>Phone: " . $selected_message['phone'] . "</p>"; // Tambahkan detail nomor telepon
            echo "<p>" . $selected_message['message'] . "</p>";
            echo "<p><small>Received on: " . $selected_message['created_at'] . "</small></p>";
            echo "</div>";
        }
        ?>
    </div>
    <footer>
        &copy; 2024 Sahabat Ngemil. All rights reserved.
    </footer>
</body>
</html>

<?php
$conn->close();
?>
