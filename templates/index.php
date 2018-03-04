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
<div style="border: solid">

    <?php
    $lastnews = array_slice($this->data['news']->getAllNews(),-3 , 3);
    foreach ($lastnews as $article)
    {
        echo $article->getHeadline();
        ?><br> <?php
    }
    ?>

</div>

<h1><a href="/Homework5/guestbook.php">Гостевая книга</a> </h1>
<div style="border: solid">

    <?php
    $lastcomments = array_slice($this->data['book']->getAllRecords(),-3 , 3);
    foreach ($lastcomments as $record)
    {
        echo $record->getMessage();
        ?><br> <?php
    }
    ?>

</div>



</body>
</html>