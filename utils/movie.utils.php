<?php
$movies = [
    ["title" => "The Walking Dead", "rating" => 7.1, "img" => "assets/img/walking-dead.jpg"],
    ["title" => "Weak Hero", "rating" => 8.5, "img" => "assets/img/weak-hero.jpg"],
    ["title" => "Death of a Unicorn", "rating" => 6.8, "img" => "assets/img/unicorn.jpg"],
    ["title" => "The Last of Us", "rating" => 8.7, "img" => "assets/img/last-of-us.jpg"],
    ["title" => "Dirk Gently", "rating" => 8.2, "img" => "assets/img/dirk-gently.jpg"]
];

function displayMovies($movies) {
    include_once __DIR__ . '/../components/template/movieCard.component.php';
    echo '<div class="movie-wrapper">';
    echo '<div class="movie-container">';
    foreach ($movies as $movie) {
        echo createMovieCard($movie);
    }
    echo '</div>';
    echo '</div>';
}
?>
