<?php
include_once './classes/Movie.php';
include_once './classes/Genre.php';

$genre_1 = new Genre("", "Descrizione film 1", "", "");
$movie_1 = new Movie("Titolo film 1", "01:30:00", $genre_1);

$genre_2 = new Genre("", "Descrizione film 2", "", "");
$movie_2 = new Movie("Titolo film 2", "01:45:00", $genre_2);

var_dump($movie_1, $movie_2);

echo '<pre>';
echo '<h3>Film Completo 1</h3>'.'<br/>';
print_r($movie_1);
echo '</pre>';

echo '<pre>';
echo '<h3>Film Completo 2</h3>'.'<br/>';
print_r($movie_2);
echo '</pre>';

?>
