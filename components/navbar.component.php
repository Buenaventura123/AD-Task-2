<?php
function createNavbar($active = '') {
    $base = '/AD-Task-2';

    return '
    <nav class="navbar">
        <ul>
            <li><a href="' . $base . '/page/home/index.php" class="' . ($active === "All Movies" ? "active" : "") . '">All Movies</a></li>
            <li><a href="' . $base . '/handlers/highRated.handler.php" class="' . ($active === "High Rated" ? "active" : "") . '">High Rated</a></li>
            <li><a href="' . $base . '/handlers/lowRated.handler.php" class="' . ($active === "Low Rated" ? "active" : "") . '">Low Rated</a></li>
        </ul>
    </nav>
    ';
}
?>
