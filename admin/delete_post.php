<?php
require_once("../include/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];

    // Prepare and execute delete statement
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $post_id);

    if ($stmt->execute()) {
        header("Location: postingan.php?message=Post+deleted+successfully");
        exit();
    } else {
        echo "Error deleting post: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: postingan.php");
    exit();
}
?>
