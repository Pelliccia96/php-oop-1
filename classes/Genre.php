<?php

class Genre {
private $name;
private $description;
private $vote;
private $releaseDate;

    public function __construct($_name, $_description, $_vote, $_releaseDate) {
        $this->fetchName($_name);
        $this->setDescription($_description);
        $this->randomVote($_vote);
        $this->randomReleaseDate($_releaseDate);
    }

    public function setDescription($_description) {
        $this->description = $_description;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function fetchName() {
        $array = ["Action"=>1, "Animation"=>2, "Comedy"=>3, "Drama"=>4, "Fantasy"=>5, "Horror"=>6, "Thriller"=>7, "Western"=>8];
        $name = (array_rand($array,1));

        $this->name = "Genere: " . $name;
    }

    public function randomVote() {
        $vote = random_int(min:0, max: 5);

        $this->vote = "Voto: " . $vote;
    }

    public function randomReleaseDate(){
        $day = random_int(min:1, max: 31);
        $month = random_int(min:1, max: 12);
        $year = random_int(min: 1990, max: 2022);

        $this->releaseDate = "Data rilascio: " . $day . "/" . $month . "/" . $year;
    }
};

?>
