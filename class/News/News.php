<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 04.03.2018
 * Time: 22:06
 */

namespace News;


class News
{
    protected $path;
    protected $news = [];

    public function __construct()
    {
        $this->path = __DIR__.'/../../data/news.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line)
        {
            [$headline, $news] = explode('|',$line);
            $this->news[] = new \News\Article($headline, $news);
        }
    }

    public function getAllNews() :array
    {
        return $this->news;
    }

    public function getArticle($id) :Article
    {

        return $this->news[$id];
    }


}