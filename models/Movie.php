<?php

class Movie
{
    public $title;
    public $year;
    public $director;

    public function infoMovie()
    {
        return "$this->title $this->year $this->director";
    }

    public function __construct($title, $year, $director)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
    }
}
