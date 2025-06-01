<?php
function createArtistCard($artist)
{
    return '
        <div class="artist-card">
            <img src="' . $artist["image"] . '" alt="' . htmlspecialchars($artist["name"]) . '">
            <div class="artist-name">' . htmlspecialchars($artist["name"]) . '</div>
            <div class="artist-rank">#' . $artist["rank"] . ' <span class="rank-change">(' . $artist["change"] . ')</span></div>
        </div>
    ';
}
