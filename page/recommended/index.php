<?php include '../../components/navbar.component.php'; ?>
<?php include '../../utils/movie.utils.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Recommended Movies</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
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