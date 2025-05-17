<?php include '../../components/navbar.component.php'; ?>
<?php include '../../components/template/recommended.component.php'; ?>
<?php include '../../utils/movie.utils.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>All Movies</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script>
        function scrollLeft(id) {
            document.getElementById(id).scrollBy({ left: -500, behavior: 'smooth' });
        }

        function scrollRight(id) {
            document.getElementById(id).scrollBy({ left: 500, behavior: 'smooth' });
        }
    </script>
</head>

<body>
    <?php echo createNavbar(active: 'All Movies'); ?>

    <h1>All Movies</h1>
    <div class="movie-wrapper">
        <button class="scroll-arrow left" onclick="scrollLeft('movieScroll')">&#8592;</button>
        <div class="movie-container" id="movieScroll">
            <?php displayMovies($movies); ?>
        </div>
        <button class="scroll-arrow right" onclick="scrollRight('movieScroll')">&#8594;</button>
    </div>

    <h2 style="margin-top: 40px;">Recommended Movies</h2>
    <div class="movie-wrapper">
        <button class="scroll-arrow left" onclick="scrollLeft('recommendedScroll')">&#8592;</button>
        <div class="movie-container" id="recommendedScroll">
            <?php renderRecommendedMovies($movies); ?>
        </div>
        <button class="scroll-arrow right" onclick="scrollRight('recommendedScroll')">&#8594;</button>
    </div>

</body>
</html>
