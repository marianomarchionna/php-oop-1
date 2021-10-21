<?php

    class Movie {
        public $title;
        public $vote;
        public $release_date;
        public $original_language;
        public $genre;

        function __construct($_title, $_vote, $_release_date, $_original_language, $_genre)
        {
            $this->title = $_title;
            $this->vote = $_vote;
            $this->release_date = $_release_date;
            $this->original_language = $_original_language;
            $this->genre = $_genre;
        }

        function setTitle($_title) {
            $this->title = $_title;
        }

        function getTitle(){
            return $this->title;
        }

        function setVote($_vote) {
            $this->vote = $_vote;
        }

        function getVote(){
            return $this->vote;
        }

        function setReleaseDate($_release_date) {
            $this->release_date = $_release_date;
        }

        function getReleaseDate(){
            return $this->release_date;
        }

        function setOriginalLanguage($_original_language) {
            $this->original_language = $_original_language;
        }

        function getOriginalLanguage(){
            return $this->original_language;
        }

        function setGenre($_genre) {
            $this->genre = $_genre;
        }

        function getGenre(){
            return $this->genre;
        }

        function getInformation() {
            return 'Titolo: ' . $this->title . '</br>' . 'Voto: ' . $this->vote . '</br>' . 'Data uscita: ' . $this->release_date . '</br>' . 'Lingua originale: ' . $this->original_language . '</br>' . 'Genere: ' . $this->genre . '</br></br>';
        }

    }

    $movie1 = new Movie('Il Cavaliere Oscuro', 4.6, '23-07-2008', 'USA', 'Azione, Fantasy');

    $movie2 = new Movie('Pulp Fiction', 4.2, '16-12-1994', 'USA', 'Drammatico, Thriller');

    echo $movie1->getInformation();
    echo $movie2->getInformation();

?>