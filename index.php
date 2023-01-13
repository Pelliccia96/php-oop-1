<?php
include_once './classes/Movie.php';
include_once './classes/Genre.php';

$genre_1 = new Genre("Azione", "Descrizione film 1", "Voto: 5");
$movie_1 = new Movie("Titolo film 1", "01:30:00", $genre_1);

$genre_2 = new Genre("Avventura","Descrizione film 2", "Voto: 4");
$movie_2 = new Movie("Titolo film 2", "01:45:00", $genre_2);

var_dump($movie_1, $movie_2);

?>
