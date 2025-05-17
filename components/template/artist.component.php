<?php
require_once '../../utils/artist.utils.php';

echo "<div class='artist-wrapper'>";
foreach ($topArtists as $artist) {
    echo createArtistCard($artist);
}
echo "</div>";
