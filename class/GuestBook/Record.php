<?php

namespace GuestBook;


class Record
{
    protected $author;
    protected $datetime;
    protected $message;

    public function __construct($author, $datetime, $message)
    {
        $this->author = $author;
        $this->datetime = $datetime;
        $this->message = $message;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getDateTime()
    {
        return $this->datetime;
    }

    function getMessage()
    {
        return $this->message;
    }

}