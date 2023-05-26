<?php 
    session_start();
    include_once("seek_and_create.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vinicio Oliveira 'Vini'">
    <meta name="description" content="Retrieve latest or specifc pre-published prints mainly from bioRxiv.">
    <meta name="keywords" content="bioRxiv, prints, papers, publications, science, bioinformatics">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/pp-script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,200;0,400;0,600;0,900;1,200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8519a18596.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Prints Please</title>
</head>
<body>
    <nav>
        <div class="link-home big-title">
            <a href="index.php">Prints, Please</a>
        </div>
        <ul>
            <li><a class="small-title" href="index.php?opt=search">Search</a></li>
            <li><a class="small-title" href="index.php?opt=random">Random</a></li>
            <li><a class="small-title" href="index.php?opt=about">About</a></li>
        </ul>
    </nav>

    <header>
        <div class="header-content">
            <h1 class="page-title">Prints, Please</h1>
            <div class="home-buttons">
                <a href="index.php?opt=search" class="nav-button normal-title">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search nav-btn-icon" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg> Search
                </a>
                <a href="index.php?opt=random" class="nav-button normal-title"><i class="fa-solid fa-dice-d20 nav-btn-icon"></i> Roll the Dice</a>
            </div>
        </div>
    </header>

    <main id="main-content">
        <?php
        if (!empty($_GET['opt']) and $_GET['opt'] === "search")
            include_once($_GET['opt'].".php");
        else if (!empty($_GET['opt'])) { //any of the other pages
            $pageToLoad = $_GET['opt'].".php";
            echo "<script> startLoad('$pageToLoad'); </script>";
        }
        else
            echo "<script> startLoad('home.php'); </script>";
        ?>
    </main>

    <footer>
        <p>Copyright &copy;2023 Vini</p>
    </footer>
</body>
</html>