<section>
    <div class="search-bar">
        <div class="search-by search-by-doi">
            <h1 class="small-title">Search By DOI</h1>
            <form method="post">
                <div class="form-elem">
                    <label for="search-doi">DOI: </label>
                    <input type="text" name="search-doi" id="search-doi">
                </div>
                <input type="submit" class="nav-button small-title" name="submit-doi" value="Search">
            </form>
        </div>
        <div class="search-by search-by-date">
            <h1 class="small-title">Search By Date</h1>
            <form method="post">
                <div class="form-elem">
                    <label for="search-from">From: </label>
                    <input type="date" name="search-from" id="search-from" min="2013-11-07" max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]">
                </div>
                <div class="form-elem">
                    <label for="search-to">To: </label><input type="date" name="search-to" id="search-to" min="2013-11-07" max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]">
                </div>
                <input type="submit" class="nav-button small-title" name="submit-date" value="Search">
            </form>
        </div>
    </div>
    <div id="search-content">
        <?php
            if (!empty($_POST['search-doi'])) { //doi search
                $_SESSION['search-doi'] = $_POST['search-doi'];
                echo "<script> startLoad('doi_search.php', '#search-content'); </script>";   
            }
            else if (!empty($_POST['search-from'])) { //doi search
                $_SESSION['search-from'] = $_POST['search-from'];
                $_SESSION['search-to'] = $_POST['search-to'];
                echo "<script> startLoad('date_search.php', '#search-content'); </script>";
            }
        ?>
    </div>
</section>