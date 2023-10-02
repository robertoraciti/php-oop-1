<?php
class Movie
{
    public $title;
    public $duration;
    public $author;

    public function __construct(
        string $title,
        float $duration,
        string $author
    ) {
        $this->title = $title;
        $this->duration = $duration;
        $this->author = $author;
    }
}