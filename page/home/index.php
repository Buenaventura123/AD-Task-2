<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once BASE_PATH . '/components/navbar.component.php';
require_once BASE_PATH . '/utils/movie.utils.php';
require_once BASE_PATH . '/utils/artist.utils.php';
require_once BASE_PATH . '/components/template/recommended.component.php';
require_once BASE_PATH . '/components/template/artist.component.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Movies</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/js/scroll.js" defer></script>
</head>

<body>
    <?= createNavbar('All Movies') ?>

    <!-- All Movies Section -->
    <div class="section-header">
        <h2>All Movies</h2>
        <a class="show-all" href="/page/all-movies/index.php">Show All</a>
    </div>
    <div class="movie-wrapper">
        <button class="scroll-arrow left" onclick="scrollLeft('movieScroll')">&#8592;</button>
        <div class="movie-container" id="movieScroll">
            <?php displayMovies($movies); ?>
        </div>
        <button class="scroll-arrow right" onclick="scrollRight('movieScroll')">&#8594;</button>
    </div>

    <!-- Top Artists Section -->
    <div class="section-header">
        <h2>Top Artists</h2>
    </div>
    <div class="artist-wrapper" id="artistScroll">
        <?php foreach ($topArtists as $artist): ?>
            <?= createArtistCard($artist); ?>
        <?php endforeach; ?>
    </div>

    <!-- Recommended Section -->
    <div class="section-header">
        <h2>Recommended</h2>
        <a class="show-all" href="/page/recommended/index.php">Show All</a>
    </div>
    <div class="movie-wrapper">
        <button class="scroll-arrow left" onclick="scrollLeft('recommendedScroll')">&#8592;</button>
        <div class="movie-container" id="recommendedScroll">
            <?php renderRecommendedMovies($movies); ?>
        </div>
        <button class="scroll-arrow right" onclick="scrollRight('recommendedScroll')">&#8594;</button>
    </div>
</body>

</html>