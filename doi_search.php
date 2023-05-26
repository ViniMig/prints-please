<?php 
session_start();
include_once("seek_and_create.php");

echo '<h1 class="gallery-title big-title">Your results</h1>';
$doi = $_SESSION['search-doi'];
$collection = getPrintDataByDOI($doi);
if (!empty($collection))
    createGallery($collection, count($collection));    
else
    echo "<h3>No publications or prints found with doi: $doi</h3>";
?>