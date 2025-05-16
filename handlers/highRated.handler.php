<?php
include_once __DIR__ . '/../utils/movie.utils.php';
include_once __DIR__ . '/../components/navbar.component.php';

$highRated = array_filter($movies, function ($m) {
    return $m["rating"] > 7;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Low Rated Movies</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <?php echo createNavbar('High Rated'); ?>
    <div class="movie-wrapper">
        <div class="movie-container">
            <?php displayMovies($highRated); ?>
        </div>
    </div>
</body>
</html>
