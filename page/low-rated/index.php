<?php
include_once __DIR__ . '/../../utils/movie.utils.php';
include_once __DIR__ . '/../../components/navbar.component.php';

$lowRated = array_filter($movies, function ($m) {
    return $m["rating"] < 7;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Low Rated Movies</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <style>
        .movie-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
            padding: 20px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php echo createNavbar('Low Rated'); ?>
    <div class="movie-wrapper">
        <h1>Low Rated Movies</h1>
        <div class="movie-container movie-list">
            <?php displayMovies($lowRated); ?>
        </div>
    </div>
</body>
</html>
