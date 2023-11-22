<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZGambit-store</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

<header class="site-header">
<h1 class="site-title">MZGambit-store</h1>
<nav class="main-nav">
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="shop.php">Магазин</a></li>
        <li><a href="aboutus.php">О нас</a></li>
        <li><a href="login.php">Войти</a></li>
    </ul>
</nav>
</header>

<main class="site-main">
    <!-- Слайд-шоу -->

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="iimages\Chess_Black_background_Black_and_white_571896_2048x1152.jpg" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="iimages\1614263495_92-p-cherno-belie-kvadratiki-fon-102.jpg" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="iimages\Chess_Black_background_Black_and_white_571896_2048x1152.jpg" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); 
}
</script>


    <section class="home-section">
        <h2>Добро пожаловать в наш магазин!</h2>
        <p>Здесь вы найдете обзор нашей продукции и другую информацию о магазине.</p>
    </section>   
</main>

<footer class="site-footer">
    <div class="contact-info">
        <h3>Контактная информация</h3>
        <p>Телефон: +7 (911) 500-00-70</p>
        <p>Email: mikzakaryan@mail.ru</p>
    </div>
    <div class="copyright">
        <p>&copy; 2023 MZGambit-store. Все права защищены.</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
