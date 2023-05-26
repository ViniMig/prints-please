<?php include_once("seek_and_create.php"); ?>
<section>
    <h1 class="gallery-title big-title">Recently in Science...</h1>
        <?php
            $collection = getPrintsDataByDate()['results']; //create default results from last week
            createGallery($collection, 6);
        ?>
</section>