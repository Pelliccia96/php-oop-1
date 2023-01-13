<?php
include_once './classes/Movie.php';

$movie_1 = new Movie("Titolo film 1", "01:30:00", "Genere film 1");
$movie_2 = new Movie("Titolo film 2", "01:45:00", "Genere film 2");

var_dump($movie_1, $movie_2);

?>
