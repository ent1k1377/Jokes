<?php
if (isset($_POST['send'])){
    include 'db.php';
    connection_db();
    $name = $_POST['name'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $date = date("Y-m-d H:i:s", time());
    $query = "INSERT INTO offerjoke (author, text, category, date) VALUES ('$name','$text', '$category', '$date')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    header('Location: /');
    exit();
}
//INSERT INTO offerjoke (author, text, date) VALUES ('Андрей','sdfsgs', '2020-08-01 00:00:00')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Предложить анекдот</title>
</head>
<body>
    <div class="main-page">
        <div class="header">
            <div class="logo"><img src="img/logo.png" alt="" srcset=""></div>
            <div class="links">
                <a href="/">Главная</a>
                <a id="active" href="offerJoke.php">Предложить анекдот</a>
            </div>
        </div>
        <div class="offerJoke">
            <h1>Предложить анекдот</h1>
            <form action="" method="post">
                <label for="name">Вас зовут:</label>
                <input type="text" name="name" id="name"><br>
                <label for="text">Ваш анекдот:</label>
                <textarea name="text" id="text" cols="30" rows="10"></textarea><br>
                <label for="category">Категория:</label>
                <select name="category" for="c">
                    <option value="all">Все</option>
                    <option value="life">Жизнь</option>
                    <option value="cats">Коты</option>
                </select><br>
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