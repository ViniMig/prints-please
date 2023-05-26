<?php  include_once("seek_and_create.php") ?>
<section>
    <h1 class="gallery-title big-title">Lady Luck says...</h1>
        <?php
            $interval = randomDateInterval();
            $collection = getPrintsDataByDate($interval['from'], $interval['to'], $isRandom=true)['results']; //create results from random interval
            createGallery($collection, 12);
        ?>
</section>