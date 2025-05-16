<?php
$movies = [
    [
        "title" => "The Walking Dead: Dead City", 
        "rating" => 7.1, 
        "img" => "the_walking_dead.jpg"
    ],
    [
        "title" => "Weak Hero Class 1", 
        "rating" => 8.5, 
        "img" => "weak_hero.jfif"
    ],
    [
        "title" => "Death of a Unicorn", 
        "rating" => 6.8, 
        "img" => "death_Unicorn.jfif"
    ],
    [
        "title" => "The Last of Us", 
        "rating" => 8.7, 
        "img" => "theLastOfUs.jfif"
    ],
    [
        "title" => "Dirk Gently's Holistic Detective Agency", 
        "rating" => 8.2, 
        "img" => "DirkGently.jfif"
    ],
    [
        "title" => "The Dark Knight", 
        "rating" => 9.0, 
        "img" => "dark_knight.jfif"
    ],
    [
        "title" => "Inception ", 
        "rating" => 8.8, 
        "img" => "inception.jfif"
    ],
    [
        "title" => "The Matrix", 
        "rating" => 8.7, 
        "img" => "matrix.jfif"
    ],
    [
        "title" => "Interstellar ", 
        "rating" => 8.6, 
        "img" => "interstellar.jfif"
    ],
    [
        "title" => "Teenage Mutant Ninja Turtles (2014)", 
        "rating" => 5.8, 
        "img" => "ninja_turtles.jfif"
    ],
    [
        "title" => "Back to the Future", 
        "rating" => 8.5, 
        "img" => "back_to_the_future.jfif"
    ],
    [
        "title" => "Transformers: The Last Knight", 
        "rating" => 5.2, 
        "img" => "transformer_Last_Knight.jfif"
    ]
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
