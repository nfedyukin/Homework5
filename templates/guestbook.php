<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Гостевая книга</h1>

<?php

    foreach ($this->data['book']->getAllRecords() as $record){
?>
<blockquote><article style="border: solid 2px #DBCECE" ">
    <div style="color: coral">
        <b><?php echo $record->getAuthor() ?></b>  -  <i><?php echo $record->getDateTime(); ?></i>
    </div><br>
    <?php echo $record->getMessage(); ?>
    </article></blockquote>
<?php } ?>

<div style="width: 500px">
    <form style="border: 1px solid black" method="post" action="/Homework5/uploadcomment.php">
        <div style="margin: 15px 15px 15px 15px">Введите имя:<input style="width: 80%; " name="author"/></div>
        <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="comment"  rows="5"></textarea><br>
        <button type="submit" style="margin: 0px 15px 15px 15px">Добавить коментарий</button><br>
    </form>
</div>
</body>
</html>