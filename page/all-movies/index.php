<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once BASE_PATH . '/components/navbar.component.php';
require_once BASE_PATH . '/utils/movie.utils.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>All Movies</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php echo createNavbar(active: 'All Movies'); ?>
    <h1 style="text-align:center;">All Movies</h1>
    <div class="grid-container">
        <?php foreach ($movies as $movie)
            echo createMovieCard($movie); ?>
    </div>
</body>

</html>