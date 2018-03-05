<!-- Шаблон для страницы конкретной новости

 -->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1>
<?php

echo $this->data['article']->getHeadline();
?></h1>
<?php
echo $this->data['article']->getNewsText();
?>
</body>
</html>