<?php
require_once("db.php"); // Sisipkan file db.php untuk koneksi ke database

// Function to create a new user
function create_user($username, $password, $role) {
    global $conn;
    
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashed_password, $role);
    
    // Execute
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    
    $stmt->close();
}

// Function to validate user credentials
function validate_user($username, $password) {
    global $conn;
    
    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        
        // Verify password
        if (password_verify($password, $hashed_password)) {
            return true;
        }
    }
    
    $stmt->close();
    return false;
}

// Function to get user details by username
function get_user_by_username($username) {
    global $conn;
    
    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, username, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    
    $stmt->close();
    return null;
}

// Function to check if the user is logged in
function check_login() {
    return isset($_SESSION['user_id']);
}

// Function to redirect to a specific page
function redirect_to($url) {
    header("Location: " . $url);
    exit;
}
 
// Fungsi untuk menambah produk baru
function tambahProduk($nama, $deskripsi, $gambar, $link_pemesanan) {
    global $conn;
    $nama = mysqli_real_escape_string($conn, $nama);
    $deskripsi = mysqli_real_escape_string($conn, $deskripsi);
    $gambar = mysqli_real_escape_string($conn, $gambar);
    $link_pemesanan = mysqli_real_escape_string($conn, $link_pemesanan);
    
    $sql = "INSERT INTO produk (nama, deskripsi, gambar, link_pemesanan) VALUES ('$nama', '$deskripsi', '$gambar', '$link_pemesanan')";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk menambah komentar baru
function tambahKomentar($id_produk, $nama_pengirim, $komentar) {
    global $conn;
    $nama_pengirim = mysqli_real_escape_string($conn, $nama_pengirim);
    $komentar = mysqli_real_escape_string($conn, $komentar);
    
    $sql = "INSERT INTO komentar (id_produk, nama_pengirim, komentar) VALUES ('$id_produk', '$nama_pengirim', '$komentar')";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk mendapatkan semua produk
function getAllProduk() {
    global $conn;
    
    $sql = "SELECT * FROM produk";
    $result = $conn->query($sql);
    
    $produk = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $produk[] = $row;
        }
    }
    
    return $produk;
}

// Fungsi untuk mendapatkan semua komentar berdasarkan id produk
function getKomentarByIdProduk($id_produk) {
    global $conn;
    
    $sql = "SELECT * FROM komentar WHERE id_produk = $id_produk ORDER BY tanggal DESC";
    $result = $conn->query($sql);
    
    $komentar = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $komentar[] = $row;
        }
    }
    
    return $komentar;
}

// Fungsi untuk menghapus produk
function hapusProduk($id) {
    global $conn;
    
    // Hapus produk
    $sql_produk = "DELETE FROM produk WHERE id = $id";
    if ($conn->query($sql_produk) === TRUE) {
        // Hapus semua komentar terkait produk
        $sql_komentar = "DELETE FROM komentar WHERE id_produk = $id";
        $conn->query($sql_komentar);
        
        return true;
    } else {
        return false;
    }
}
?>
