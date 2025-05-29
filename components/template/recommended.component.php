<?php
require_once __DIR__ . '/../../bootstrap.php';
include_once BASE_PATH . '/utils/movie.utils.php';

function renderRecommendedMovies($movies)
{
    $recommended = array_filter($movies, callback: function ($m) {
        return $m["rating"] >= 8.5;
    });

    foreach ($recommended as $movie) {
        echo createMovieCard($movie);
    }
}

?>