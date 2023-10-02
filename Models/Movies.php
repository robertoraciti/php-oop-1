<?php
class Movie extends Production
{
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $author,
        int $published_year,
        int $running_time
    ) {
        parent::__construct($title, $author);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }

    public function get_details()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br> 
        <strong>Autore:</strong> $this->author, <br>
        <strong>Anno di pubblicazione:</strong> $this->published_year, <br>
        <strong>Durata in minuti:</strong> $this->running_time";
    }
}