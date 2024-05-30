<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "good_wash_cleaning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // SQL to select user
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header('Location: welcome.php'); // redirect to a welcome page or dashboard
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
