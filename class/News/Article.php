<?php

namespace News;


class Article
{
    protected $headline;
    protected $news_text;

    public function __construct(string $headline, string $news_text)
    {
        $this->headline = $headline;
        $this->news_text = $news_text;
    }

    /**
     * @return string
     */
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * @return string
     */
    public function getNewsText(): string
    {
        return $this->news_text;
    }

}