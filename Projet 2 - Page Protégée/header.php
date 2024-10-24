<?php
// Start the session if not started yet
if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures Cultes des Années 80</title>
    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="images/voiture.png">
    <!--Google Fonts integration-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <!--Link to stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!--------Title----------->
        <h1>Les Voitures Cultes des Années 80</h1>
        <!---------Nav links------>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <?php
                // Display navigation options
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li><a href="bio.php">Biographie</a></li>';
                    echo '<li><a href="logout.php">Se déconnecter</a></li>';
                } else {
                    echo '<li><a href="connexion.php">Connexion</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <!-- Scroll-to-top Button -->
    <a href="#" id="scroll-to-top">↑</a>
    <script>
        // Show or hide the scroll-to-top button
        window.addEventListener("scroll", function() {
            const scrollToTopButton = document.getElementById("scroll-to-top");
            if (window.scrollY > 100) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });
    </script>