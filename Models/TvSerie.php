<?php
class TvSerie extends Production
{
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $title,
        string $author,
        int $aired_from_year,
        int $aired_to_year,
        int $number_of_episodes,
        int $number_of_seasons,
    ) {
        parent::__construct($title, $author);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function get_details()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Autore:</strong> $this->author, <br>
        <strong>Anno messa in onda primo episodio:</strong> $this->aired_from_year, <br> 
        <strong>Anno messa in onda ultimo episodio:</strong> $this->aired_to_year, <br>
        <strong>Episodi:</strong> $this->number_of_episodes, <br>
        <strong>Stagioni:</strong> $this->number_of_seasons";
    }
}