<?php
class Movie
{
    public $title;
    public $originalTitle;
    public $genre;
    public $minutes;

    //********************************************************************
    //Funzione __CONSTRUCTOR
    function __construct($_minutes)
    {
        if (!is_numeric($_minutes)) {
            return;
        }

        $this->setMinutes($_minutes);
    }

    //********************************************************************
    // Funzione per TITOLO
    public function setTitle($newValue)
    {
        $this->title = $newValue;
    }

    public function getTitle()
    {
        return $this->title;
    }

    //********************************************************************
    // Funzione per ORIGINALTITLE
    public function setOriginalTitle($newValue)
    {
        $this->originalTitle = $newValue;
    }

    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    //********************************************************************
    // Funzione per GENRE
    public function setGenre($newValue)
    {
        $this->genre = $newValue;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    //********************************************************************
    // Funzione per MINUTES
    public function setMinutes($newValue)
    {
        $this->minutes = $newValue;
    }

    public function getMinutes()
    {
        return $this->minutes;
    }
}
