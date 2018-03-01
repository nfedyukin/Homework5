<?php


namespace GuestBook;


class Book
{
    protected $path;
    protected $records = [];

    public function __construct()
    {
        $lines = file(__DIR__.'/../../data/comments.txt', FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line)
        {
            [$author, $datetime, $message] = explode('|',$line);

            $this->records[] = new \GuestBook\Record($author, $datetime, $message);
        }
    }

    public function getAllRecords()
    {
        return $this->records;
    }

    public function addRecords(Record $record) :array
    {
        $this->records[] = $record;
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