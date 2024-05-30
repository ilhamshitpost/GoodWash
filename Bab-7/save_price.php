<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Price</title>
    <link rel="stylesheet" href="Pricelist.css">
</head>
<body>
    <div class="container">
        <h1>Save Price</h1>
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

            $sql = "UPDATE treatments SET harga=? WHERE nama_treatment=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $harga, $nama_treatment);

            if ($stmt->execute()) {
                echo '<div class="message success">Record updated successfully</div>';
            } else {
                echo '<div class="message error">Error updating record: ' . $conn->error . '</div>';
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <button onclick="window.location.href='index.html'">Go Back</button>
    </div>
</body>
</html>
