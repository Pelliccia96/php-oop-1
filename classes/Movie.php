<?php

class Movie {
private $title;
private $duration;
private $genre;

    public function __construct($_title, $_duration, $_genre) {
        $this->setTitle($_title);
        $this->setDuration($_duration);
        $this->setGenre($_genre);
    }

    public function setTitle($_title) {
        $this->title = $_title;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setDuration($_duration) {
        $this->duration = $_duration;
        return $this;
    }
    
    public function getDuration() {
        return $this->duration;
    }

    public function setGenre($_genre) {
        $this->genre = $_genre;
        return $this;
    }
    
    public function getGenre() {
        return $this->genre;
    }
};

?>
