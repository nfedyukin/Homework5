<!-- Шаблон страницы Последние новости
Отображается заглавие (ссылка) и часть новости
-->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>
<h1>Последние новости</h1>
    <div>
        <?php
        $news = $this->data['news']->getAllNews();
        foreach ($news as $index => $article)
        {

            ?><br><a href = "/Homework5/article.php?ID=<?php echo $index  ?>" ><?php
            echo $article->getHeadline();


            ?></a> <br> <small><?php
            echo substr($article->getNewsText(),0,100) . ' ...';
            ?> </small></blockquote><hr> <?php
        }
        ?>
    </div>



</body>
</html>