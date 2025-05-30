<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once BASE_PATH . '/components/navbar.component.php';
require_once BASE_PATH . '/utils/movie.utils.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Recommended Movies</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <style>

    </style>
</head>

<body>
    <?php echo createNavbar(active: 'Recommended'); ?>
    <h1 style="text-align:center;">Recommended Movies</h1>
    <div class="grid-container">
        <?php
        $recommended = array_filter($movies, callback: fn($m) => $m["rating"] >= 8.5);
        foreach ($recommended as $movie)
            echo createMovieCard($movie);
        ?>
    </div>
</body>

</html>