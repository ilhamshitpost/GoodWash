<?php
$servername = "localhost";
$username = "root";  // sesuaikan dengan username database Anda
$password = "";      // sesuaikan dengan password database Anda
$dbname = "pricelist_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM treatments";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Mengambil data dari setiap baris hasil
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengembalikan data dalam format JSON
echo json_encode($data);

$conn->close();
?>
