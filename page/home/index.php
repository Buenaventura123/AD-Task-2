<?php include '../../components/navbar.component.php'; ?>
<?php include '../../utils/movie.utils.php'; ?>
<?php include '../../utils/artist.utils.php'; ?> <!-- make sure this is here BEFORE using $topArtists -->
<?php include '../../components/template/recommended.component.php'; ?>
<?php include '../../components/template/artist.component.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>All Movies</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script src="../../assets/js/scroll.js"></script>

</head>

<body>
    <?php echo createNavbar(active: 'All Movies'); ?>

    <!-- All Movies Section -->
    <div class="section-header">
        <h2>All Movies</h2>
        <a class="show-all" href="../all-movies/index.php">Show All</a>
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
        <?php foreach ($topArtists as $artist) echo createArtistCard($artist); ?>
    </div>

    <!-- Recommended Section -->
    <div class="section-header">
        <h2>Recommended</h2>
        <a class="show-all" href="../recommended/index.php">Show All</a>
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
