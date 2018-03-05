<!-- Шаблон главной страницы
Отображается заголовок и вызываются 2 шаблона для формирования блоков
с новостями и с гостевой книгой
-->

<?php
$newsblock = $this->render(__DIR__ . '/../templates/newsblock.php');
$gbblock = $this->render(__DIR__ . '/../templates/gbblock.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<h1><a href="/Homework5/newssection.php">Новости</a> </h1>

<?php echo $newsblock; ?>

<h1><a href="/Homework5/guestbook.php">Гостевая книга</a> </h1>

<?php echo $gbblock; ?>


</body>
</html>