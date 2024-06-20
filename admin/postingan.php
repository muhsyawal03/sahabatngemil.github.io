<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan - Sahabat Ngemil</title>
    <style>
        body {
            display: flex;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
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

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
            margin-bottom: 20px;
        }

        .content h3 {
            color: #8a2be2;
            margin-bottom: 10px;
        }

        .content p {
            color: #666;
            line-height: 1.6;
        }

        .post {
            max-width: 50%;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post h4 {
            margin-top: 0;
            color: #8a2be2;
        }

        .post p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .post small {
            display: block;
            text-align: right;
            color: #999;
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

        .form-posting {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-posting h3 {
            color: #8a2be2;
            margin-bottom: 10px;
        }

        .form-posting label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        .form-posting input[type="text"], 
        .form-posting textarea,
        .form-posting input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .form-posting textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-posting button {
            padding: 10px 20px;
            background-color: #8a2be2;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-posting button:hover {
            background-color: #ff69b4;
        }
        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .delete-button:hover {
            background-color: #c0392b;
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
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="postingan.php">Postingan</a></li>
        <li><a href="messages.php">Pesan</a></li> <!-- Tambahkan link untuk Pesan -->
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h2>Postingan Baru</h2>  
        </header>
        <div class="form-posting">
            <h3>Create New Post</h3>
            <form action="proses_posting.php" method="POST" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="content">Content:</label>
                <textarea id="content" name="content" required></textarea>

                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image">

                <button type="submit">Post</button>
            </form>
        </div>
        <div class="content">
        <h3>Recent Posts</h3>
            <div class="post">
            <?php
                require_once("../include/db.php");

                $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='post-item'>";
                        echo "<h4>" . htmlspecialchars($row['title']) . "</h4>";
                        if (!empty($row['image'])) {
                            echo "<img src='../". htmlspecialchars($row['image']) . "' alt='Post Image'>";
                        }
                        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                        echo "<small>Posted on " . htmlspecialchars($row['created_at']) . "</small>";
                        echo "<form action='delete_post.php' method='POST' style='display:inline-block;'>";
                        echo "<input type='hidden' name='post_id' value='" . htmlspecialchars($row['id']) . "'>";
                        echo "<button type='submit' class='delete-button'>Delete</button>";
                        echo "</form>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No posts found.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 Sahabat Ngemil. All rights reserved.
    </footer>
</body>
</html>
