<?php
session_start();
include_once("seek_and_create.php");
echo '<h1 class="gallery-title big-title">Your results</h1>';
$from = $_SESSION['search-from'];
$to = $_SESSION['search-to'];
$collection = getPrintsDataByDate($from, $to)['results'];
if (!empty($collection)) {
    if (count($collection) < 7)
        createGallery($collection, count($collection));
    else
        createGallery($collection, 6);
}    
else
    echo "<h3>No publications or prints found with date range: $from : $to</h3>";
?>