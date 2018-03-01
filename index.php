<?php

require_once __DIR__ . '/boot.php';

$view = new View();
$view ->add('book', new \GuestBook\Book);

$view->display(__DIR__ . '/templates/index.php');