<?php
function createMovieCard($movie) {
    return '
        <div class="movie-card">
            <img src="' . $movie["img"] . '" alt="' . $movie["title"] . '">
            <div class="movie-title">' . $movie["title"] . '</div>
            <div class="movie-rating">' . $movie["rating"] . '</div>
        </div>
    ';
}
?>
