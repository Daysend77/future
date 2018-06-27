<?php
include_once __DIR__.'/../core/Db.php';
include_once __DIR__.'/../core/Model.php';
include_once __DIR__.'/../core/Controller.php';

if(isset($_POST['btn']) && !empty($_POST['name']) && !empty($_POST['content'])){
    Controller::actionAdd();
    header("Location: index.php");
};

$comments = [];
$comments = Controller::actionShow();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Комментарии</title>
</head>
<body>


<div class="header">
    <div class="header-container">
        <div class="header-info">
            <ul>
                <li>Телефон: (499) 340-94-71</li>
                <li>Email: <a href="info@future-group.ru">info@future-group.ru</a></li>
            </ul>
            <p>Комментарии</p>
        </div>
        <div class="header-logo"></div>
    </div>
</div>


<div class="content">
    <div class="content-container">
        <div class="content-comments">
            <?php foreach ($comments as $k): ?>
                <div class="comment-block">
                    <span id="name"><?= $k['name'] ?></span>
                    <span><?= $k['time'] ?></span>
                    <span><?= $k['date'] ?></span>

                    <p><?= $k['content'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="content-form">
            <h2>Оставить комментарий</h2>
            <form action="index.php" method="post">
                <label for="form-name"><p>Ваше имя</p></label>
                <input type="text" name="name" id="form-name">
                <label for="form-content"><p>Ваш комментарий</p></label>
                <textarea name="content" id="form-content" cols="40" rows="6"></textarea>
                <button type="submit" name="btn">Отправить</button>
            </form>
        </div>
    </div>
</div>


<div class="footer">
    <div class="footer-container">
        <div class="footer-logo"></div>
        <div class="footer-info">
            <ul>
                <li>Телефон: (499) 340-94-71</li>
                <li>Email: <a href="info@future-group.ru">info@future-group.ru</a></li>
                <li>Адрес: <a href="#">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></li>
            </ul>
            <p>&copy; 2010 - 2014 Future. Все права защищены</p>
        </div>
    </div>
</div>


</body>
</html>
