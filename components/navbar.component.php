<?php
function createNavbar($active = '') {
    $base = '/AD-Task-2';

    return '
    <nav class="navbar">
        <ul>
            <li><a href="' . $base . '/page/home/index.php" class="' . ($active === "All Movies" ? "active" : "") . '">Home</a></li>
            <li><a href="' . $base . '/page/high-rated/index.php" class="' . ($active === "High Rated" ? "active" : "") . '">High Rated</a></li>
            <li><a href="' . $base . '/page/low-rated/index.php" class="' . ($active === "Low Rated" ? "active" : "") . '">Low Rated</a></li>
        </ul>
    </nav>
    ';
}
?>
