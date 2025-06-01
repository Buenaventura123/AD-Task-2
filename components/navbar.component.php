<?php
function createNavbar($active = '')
{

    return '
   <header>
        <nav class="navbar">
            <a href="/page/home/index.php" class="logo"; class="' . ($active === "All Movies" ? "active" : "") . '">MOVIE RATES<span>.</span></a>
            <ul class="menu-links">
            <li><a href="/page/home/index.php" class="' . ($active === "All Movies" ? "active" : "") . '">Home</a></li>
            <li><a href="/page/high-rated/index.php" class="' . ($active === "High Rated" ? "active" : "") . '">High Rated</a></li>
            <li><a href="/page/low-rated/index.php" class="' . ($active === "Low Rated" ? "active" : "") . '">Low Rated</a></li>
            </ul>
        </nav>
    </header>
    ';
}
?>