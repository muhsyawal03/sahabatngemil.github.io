<?php
// Koneksi ke database (ganti dengan konfigurasi database Anda)
require_once("../include/db.php");

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// SQL untuk menyimpan pesan ke database
$sql = "INSERT INTO messages (name, email, phone, message, status) VALUES ('$name', '$email', '$phone', '$message', 0)";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman contact.php dengan parameter success=true
    header("Location: ../contact.php?success=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
