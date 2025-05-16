<?php
include_once("../../bootstrap.php");
include_once("../../utils/movie.utils.php");

$lowRated = array_filter($movies, function ($m) {
    return $m["rating"] < 7;
});

displayMovies($lowRated);
?>
