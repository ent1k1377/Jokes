<?php
session_start();
if (isset($_SESSION['name'])){
    header('Location: /');
    exit();
}
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($name == 'root' and $password == 'root'){
        $_SESSION['name'] = $_POST['name'];
        header('Location: /');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Предложить анекдот</title>
</head>
<body>
    <div class="main-page">
        <div class="header">
            <div class="logo"><img src="../img/logo.png" alt="" srcset=""></div>
            <div class="links">
                <a href="/">Главная</a>
                <a href="offerJoke.php">Предложить анекдот</a>
                <a id="active" href="admin/">Админ панель</a>
            </div>
        </div>
        <div class="authorization">
            <h1>Авторизация</h1>
            <form action="" method="post">
                <label for="name">Ваше имя:</label>
                <input type="text" name="name" id="name"><br>
                <label for="password">Ваш пароль:</label>
                <input type="password" name="password" id="password"><br>
                <input type="submit" name="send" value="Отправить">
            </form>
        </div>
        <div class="footer-back">
            <div class="footer">
                <span>© 2020 Анекдоты.ру. Автор проекта - Павлов Даниил Андреевич. Почта - ent1k1337@yandex.ru</span>
            </div>
        </div>
    </div>
</body>
</html>