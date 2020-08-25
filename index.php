<?php
session_start();
include 'db.php';
connection_db();
if (!isset($_GET['page'])){
    $page = 1;
}
else{
    $page = $_GET['page'];
}
if (!isset($_GET['category'])){
    $category = 'all';
}
else{
    $category = $_GET['category'];
}
if (!isset($_GET['sortdate'])){
    $sortdate = 1;
}
else{
    if ($_GET['sortdate']){
        $sortdate = 0;
    }
    else{
        $sortdate = 1;
    }
}
$jokesPerPage = 8;
$limit = ceil(($page - 1) * $jokesPerPage);
$lenthArray = mysqli_num_rows(allRecords('offerjoke',''));
$numberPag = ceil($lenthArray / $jokesPerPage);
if ($page > $numberPag){
    header("Location: /?page=1&sortdate=$sortdate");
}
$arraySortDate = [0=>['От нового к старому', ''], 1=>['От старого к новому', 'DESC']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Анекдот</title>
</head>
<body>
    <div class="main-page">
        <div class="header">
            <div class="logo"><img src="img/logo.png" alt="" srcset=""></div>
            <div class="links">
                <a id="active" href="/?page=1&sortdate=0">Главная</a>
                <a href="offerJoke.php">Предложить анекдот</a>
                <?php
                if (isset($_SESSION['name'])){
                    echo '<a href="admin/">Админ панель</a>';
                }
                ?>
                
            </div>
        </div>
        <hr>
        <div class="sort">
            <span>Сортировать: </span>
            <div class="sort-category">
                <span id='c'>Категория</span>
                <select for="c">
                    <option value="*">Все</option>
                    <option value="life">Жизнь</option>
                    <option value="cats">Коты</option>
                </select>
            </div>
            <div class="sort-date">
                <span>Дата:</span>
                <?='<a href="/?sortdate='.$sortdate.'">'.$arraySortDate[$sortdate][0].'</a>'?>
            </div>
        </div>
        <div class="pagination">
        <?php
            $leftPage = $page - 1; 
            echo '<div class="pagination-item"><a id="previous" href="?page='.$leftPage.'">«</a></div>';

            if (($numberPag > 5) and $page > 3){
                if ($page > $numberPag - 3){
                    for ($i=$numberPag - 4; $i<=$numberPag; $i++){
                        pagination_item($i);
                    }
                }
                else{
                    for ($i=$page - 2; $i<=$page + 2; $i++){
                        pagination_item($i);
                    }
                }
            }
            else{
                for ($i=1; $i<=5; $i++){
                    pagination_item($i);
                }
            }
            $rightPage = $page + 1; 
            echo '<div class="pagination-item"><a id="next" href="?page='.$rightPage.'">»</a></div>';
        ?>
        </div>
        <div class="jokes">  
        <?php
            $array_month = ['08'=>'августа'];
            $result = allRecords('offerjoke', "ORDER BY date {$arraySortDate[$sortdate][1]} LIMIT $limit,$jokesPerPage");
            
            foreach ($result as $elem){
                
                $month = explode(' ', $elem['date'])[0];
                $dateText = explode('-', $month)[2].' '.$array_month[explode('-', $month)[1]].' '.explode('-', $month)[0];
                if ($elem['category'] == 'all'){
                    $category_text = '';
                }
                else{
                    $category_text = '<span>Категория: '.$elem['category'].'</span>';
                }
                echo '<div class="joke">
                    <div class="joke-date">'.$dateText.'</div>
                    <div class="joke-text">
                    '.nl2br($elem['text']).'
                    </div>
                    <div class="joke-down">
                        <a href="http://">Обсудить(21)</a>
                        '.$category_text.'
                        <span>Автор: '.$elem['author'].'</span>
                    </div>
                </div>';
            }
            
        ?>
        </div>
        <div class="pagination">
        <?php
            function pagination_item($i){
                global $page;
                if ($i == $page){
                    $class = ' id="active"';
                }
                else{
                    $class = '';
                }
                echo "<div class=\"pagination-item\"><a$class href='/?page=$i'>$i</a></div>";
            }
            $leftPage = $page - 1; 
            echo '<div class="pagination-item"><a id="previous" href="?page='.$leftPage.'">«</a></div>';

            if (($numberPag > 5) and $page > 3){
                if ($page > $numberPag - 3){
                    for ($i=$numberPag - 4; $i<=$numberPag; $i++){
                        pagination_item($i);
                    }
                }
                else{
                    for ($i=$page - 2; $i<=$page + 2; $i++){
                        pagination_item($i);
                    }
                }
            }
            else{
                for ($i=1; $i<=5; $i++){
                    pagination_item($i);
                }
            }
            $rightPage = $page + 1; 
            echo '<div class="pagination-item"><a id="next" href="?page='.$rightPage.'">»</a></div>';
        ?>
        </div>
        <div class="footer-back">
            <div class="footer">
                <span>© 2020 Анекдоты.ру. Автор проекта - Павлов Даниил Андреевич. Почта - ent1k1337@yandex.ru</span>
            </div>
        </div>
    </div>
</body>
</html>
