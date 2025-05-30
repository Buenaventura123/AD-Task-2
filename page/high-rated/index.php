<?php
require_once __DIR__ . '/../../bootstrap.php';
include_once BASE_PATH . '/utils/movie.utils.php';
include_once BASE_PATH . '/components/navbar.component.php';

$highRated = array_filter($movies, function ($m) {
    return $m["rating"] > 7;
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>High Rated Movies</title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
    <?php echo createNavbar('High Rated'); ?>
    <div class="movie-wrapper">
        <h1>High Rated Movies</h1>
        <div class="movie-container movie-list">
            <?php displayMovies($highRated); ?>
        </div>
    </div>
</body>

</html>