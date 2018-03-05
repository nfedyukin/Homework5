<?php
require_once __DIR__ . '/boot.php';

$book = new \GuestBook\Book();
if(isset($_POST['comment'])){
    $record = new \GuestBook\Record($_POST['author'],date('d.m.Y H:i'), $_POST['comment']);
    $book->addRecord($record)->save();
   header('Location: /Homework5/guestbook.php');
}
