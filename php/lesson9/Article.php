<?php


class Article
{
    public $author;
    public $title;
    public $text;
    public $created;

    public function __construct(Author $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }
}