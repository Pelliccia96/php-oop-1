<?php

class Genre {
private $name;
private $description;
private $vote;

    public function __construct($_name, $_description, $_vote) {
        $this->setTitle($_name);
        $this->setDescription($_description);
        $this->setGenre($_vote);
    }

    public function setTitle($_genre) {
        $this->name = $_genre;
    }

    public function getTitle() {
        return $this->name;
    }

    public function setDescription($_description) {
        $this->description = $_description;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function setGenre($_vote) {
        $this->vote = $_vote;
    }
    
    public function getGenre() {
        return $this->vote;
    }
};

?>