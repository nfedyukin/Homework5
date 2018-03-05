<!-- Контрол для главной страницы -->
<?php

require_once __DIR__ . '/boot.php';


$view = new View();
$view ->add('book', new \GuestBook\Book);
$view ->add('news', new \News\News);

$rendered = $view->render(__DIR__ . '/templates/index.php');

echo $rendered;