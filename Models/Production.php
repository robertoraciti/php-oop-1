<?php
class Production
{
    public $title;
    public $author;

    public function __construct(
        string $title,
        string $author
    ) {
        $this->title = $title;
        $this->author = $author;
    }

    public function get_details()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Autore:</strong> $this->author";
    }
}