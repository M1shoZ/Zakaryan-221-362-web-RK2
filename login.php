<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Store</title>
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
<div class="signIn">
        <h2>Авторизация</h2>
        <form action="index.php" method="post">
            <!-- LOGIN -->
            <div class="form-group">
                <input id="login" type="text" name="login" placeholder="Введите имя">
            </div>
            <!-- Password -->
            <div class="form-group">
                <input id="password" type="password" name="password" placeholder="Введите пароль">
            </div>
            <!-- Button -->
            <div class="form-group">
                <input class="btn" type="submit" value="Войти">
            </div>
            <!-- chekbox -->
            <div class="form-group">
                <label for="remMe">Remember me</label>
                <input id="remMe" type="checkbox" name="checkbox" value="yes">
            </div>
        </form>
    </div>
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
