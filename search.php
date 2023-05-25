<section>
    <div class="search-bar">
        <div class="search-by-doi">
            <h1 class="small-title">Search By DOI</h1>
            <form method="post">
                <p><label for="search-doi">DOI: </label><input type="text" name="search-doi" id="search-doi"></p>
                <input type="submit" class="nav-button" name="submit-doi" value="Search">
            </form>
        </div>
    </div>
    <?php
        if (!empty($_POST['search-doi'])) { //doi search
            echo '<h1 class="gallery-title big-title">Your results</h1>';
            $doi = $_POST['search-doi'];
            $collection = getPrintDataByDOI($doi);
            if (!empty($collection))
                createGallery($collection, count($collection));    
            else
                echo "<h3>No publications or prints found with doi: $doi</h3>";
                
        }
    ?>
</section>