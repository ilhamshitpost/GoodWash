<?php 
  session_start();
  if($_SESSION['username'] == null) {
    header('index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>GOOD WASH</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .logo img {
		width: 300px;
        height: auto;
		margin-bottom: 50px;
        position: relative;
        left: 34%;
	}
        .overlay {
            padding: 20px;
            max-width: 300px;
            width: 90%;
            margin: auto;
            background: none; /* Menghilangkan latar belakang putih */
        }
        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #555;
        }
        a {
            position: relative;
            left: 34%;
            text-decoration: none;
            color: #fff;
            background-color: #111111;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 5px;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #694242;
        }
        .white-text {
            color: #fff; /* Mengatur warna tulisan menjadi putih */
        }
        button{
            text-decoration: none;
            color: #fff;
            background-color: #111111;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 5px;
            transition: all 0.3s ease; 
        }
    </style>
</head>
<body>
    <div class="overlay">
    <div class="logo">
            <img src="aset/goodwash.png" alt="Logoweb">
        </div>
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
        <a href="admin.html">Admin</a>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="aset/2.png" style="">
        </div>
      
        <div class="mySlides fade">
          <img src="aset/1.png" style="">
        </div>

        <div class="mySlides fade">
            <img src="aset/3.png" style="">
          </div>
      
        <!-- Tombol navigasi -->
        <button class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <button class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      
      <script> 
      var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
  
      </script>
</body>
</html>