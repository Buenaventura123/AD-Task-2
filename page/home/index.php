<?php include '../../components/navbar.component.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Movies</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script>
        function scrollLeft() {
            document.getElementById('movieScroll').scrollBy({ left: -500, behavior: 'smooth' });
        }
        function scrollRight() {
            document.getElementById('movieScroll').scrollBy({ left: 300, behavior: 'smooth' });
        }
    </script>
</head>
<body>
    <h1>All Movies</h1>
    <div class="movie-wrapper">
        <div class="movie-container" id="movieScroll">
            <button class="scroll-arrow left" onclick="scrollLeft()">&#8592;</button>

            <?php
            include '../../utils/movie.utils.php';
            displayMovies($movies);
            ?>
            <button class="scroll-arrow right" onclick="scrollRight()">&#8594;</button>
        </div>
    </div>
</body>
</html>
