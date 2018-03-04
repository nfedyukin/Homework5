<?php


namespace GuestBook;


class Book
{
    protected $path;
    protected $records = [];

    public function __construct()
    {
        $this->path = __DIR__.'/../../data/comments.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line)
        {
            [$author, $datetime, $message] = explode('|',$line);

            $this->records[] = new \GuestBook\Record($author, $datetime, $message);
        }
    }

    public function getAllRecords() :array
    {
        return $this->records;
    }

    public function addRecord(Record $record)
    {
        $this->records[] = $record;
        return $this;

    }

    public function save()
    {
        $lines = [];
        foreach ($this->records as $record)
        {
            $lines[] = $record->getAuthor() . '|'
                . $record->getDateTime(). '|'
                . $record->getMessage();
        }
        file_put_contents($this->path, implode(PHP_EOL, $lines));
    }

}