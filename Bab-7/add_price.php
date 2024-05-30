<?php
$servername = "localhost";
$username = "root";  // ganti sesuai dengan username database Anda
$password = "";  // ganti sesuai dengan password database Anda
$dbname = "pricelist_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_treatment = $_POST["nama_treatment"];
    $harga = $_POST["harga"];

    $sql = "INSERT INTO treatments (nama_treatment, harga) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nama_treatment, $harga);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
