<!-- Контрол для страницы Гостевая книга -->
<?php

require_once __DIR__ . '/boot.php';

$view = new View();
$view ->add('book', new \GuestBook\Book);


//$view->display(__DIR__ . '/templates/index.php');
$rendered = $view->render(__DIR__ . '/templates/guestbook.php');

echo $rendered;