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
<script>
    function scrollLeft(id) {
        const el = document.getElementById(id);
        if (el) el.scrollBy({ left: -500, behavior: 'smooth' });
    }

    function scrollRight(id) {
        const el = document.getElementById(id);
        if (el) el.scrollBy({ left: 500, behavior: 'smooth' });
    }

    // Enable mouse drag to scroll
    function enableDragScroll(containerId) {
        const slider = document.getElementById(containerId);
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // The multiplier controls the scroll speed
            slider.scrollLeft = scrollLeft - walk;
        });
    }

    window.onload = function () {
        enableDragScroll('movieScroll');
        enableDragScroll('recommendedScroll');
    };
</script>


    </script>
</head>

<body>
    <?php echo createNavbar(active: 'All Movies'); ?>

    <!-- All Movies Section -->
    <div class="section-header">
        <h2>All Movies</h2>
        <a class="show-all" href="../all">Show All</a>
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
        <a class="show-all" href="../recommended">Show All</a>
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
