<!-- Контрол для страницы просмотра новости
 -->

<?php
require_once __DIR__ . '/boot.php';


if(isset($_GET['ID']))
{
    $news = new \News\News();
    $view = new View();

    $view->add('article', $news->getArticle((integer)$_GET['ID']));

    $rendered = $view->render(__DIR__ . '/templates/article.php');

    echo $rendered;
} else {
    $view = new View();
    $rendered = $view->render(__DIR__ . '/templates/404.php');

    echo $rendered;
}