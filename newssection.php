<?php
require_once __DIR__ . '/boot.php';

$view = new View();
$view ->add('news', new \News\News);

$rendered = $view->render(__DIR__ . '/templates/news.php');

echo $rendered;
