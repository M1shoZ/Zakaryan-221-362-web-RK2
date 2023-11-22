<?php
    include "db.php";
    $result = mysqli_query($link, "SELECT * FROM `MZGambit-store`");
?>

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
    <section class="shop-section">
        <h2>Магазин</h2>
        <ul class="product-list">
    <?php 
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <li class="product-item">
            <a href="product.php?id=<?php echo $row['id']; ?>">
                <p><?php echo $row['product']; ?> - <?php echo $row['price']; ?></p>
                <figure class="img">
                    <img class="prod_img" title="<?php echo $row['img'];?>" src="<?php echo $row['img'];?>" />
                </figure>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
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
