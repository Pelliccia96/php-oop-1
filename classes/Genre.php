<?php

class Genre {
private $genre;
private $description;
private $vote;

    public function __construct($_genre, $_description, $_vote) {
        $this->setTitle($_genre);
        $this->setDuration($_description);
        $this->setGenre($_vote);
    }

    public function setTitle($_genre) {
        $this->genre = $_genre;
        return $this;
    }

    public function getTitle() {
        return $this->genre;
    }

    public function setDuration($_description) {
        $this->description = $_description;
        return $this;
    }
    
    public function getDuration() {
        return $this->description;
    }

    public function setGenre($_vote) {
        $this->vote = $_vote;
        return $this;
    }
    
    public function getGenre() {
        return $this->vote;
    }
};

?>