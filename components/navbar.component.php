
<?php
function createNavbar($active = '') {
    $base = '/AD-Task-2';

    return '
   <header>
        <nav class="navbar">
            <a href="' . $base . '/page/home/index.php" class="logo"; class="' . ($active === "All Movies" ? "active" : "") . '">MOVIE RATES<span>.</span></a>
            <ul class="menu-links">
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
            <li><a href="' . $base . '/page/home/index.php" class="' . ($active === "All Movies" ? "active" : "") . '">Home</a></li>
            <li><a href="' . $base . '/page/high-rated/index.php" class="' . ($active === "High Rated" ? "active" : "") . '">High Rated</a></li>
            <li><a href="' . $base . '/page/low-rated/index.php" class="' . ($active === "Low Rated" ? "active" : "") . '">Low Rated</a></li>
            </ul>
            <span id="menu-btn" class="material-symbols-outlined">menu</span>
        </nav>
    </header>
    ';
}
?>
