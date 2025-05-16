<?php
include_once __DIR__ . '/../../utils/movie.utils.php';

function renderRecommendedMovies($movies) {
    $recommended = array_filter($movies, function ($m) {
        return $m["rating"] >= 8.5;
    });

    echo '<div class="recommended-container" id="recommendedScroll">';
    displayMovies($recommended);
    echo '</div>';
}

?>
