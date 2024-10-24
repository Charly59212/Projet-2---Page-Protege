<?php
// Start session
session_start();

// Check if the user is logged in
if (empty($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Redirect the user to the bio page
    header('Location: connexion.php');
    exit;
}

// Include the header of the website
require('header.php'); 
?>

<main>
    <!------------Page content----------->
    <h2>Biographie de Pininfarina</h2>
    <div id="logo">
        <img src="images/logo.jpg" alt="logo" title="logo">
    </div>
    <br>
    <p>Pininfarina est un célèbre studio de design automobile italien, fondé en 1930 par <strong>Gian-Battista Pinin Farina</strong>, puis dirigé par Gaspare Bona, Sergio Pininfarina, et ses fils Andrea et Paolo.</p><br>
    <div class="gallery">
        <div class="modele">
            <img src="images/pinin.jpg" alt="Battista Farina" title="Battista Farina">
            <p class="autonom">Battista Pininfarina</p>
        </div>
        <div class="modele">
            <img src="images/pinin2.jpg" alt="Paolo Pininfarina" title="Paolo Pininfarina">
            <p class="autonom">Paolo Pininfarina</p>
        </div>
        <div class="modele">
            <img src="images/pinin3.jpg" alt="Sergio Pininfarina" title="Sergio Pininfarina">
            <p class="autonom">Sergio Pininfarina</p>
        </div>
        <div class="modele">
            <img src="images/pinin4.jpg" alt="Andréa Pininfarina" title="Andréa Pininfarina">
            <p class="autonom">Andréa Pininfarina</p>
        </div>
    </div>
    <p>Pendant les années 1980, ils ont travaillé sur des voitures iconiques, notamment avec Ferrari et sa légendaire Testarossa : </p><br>
    <div class="gallery">
        <div class="modele">
            <img src="images/Ferrari Testarossa.jpg" alt="Ferrari Testarossa" title="Ferrari Testarossa">
            <p class="autonom">Un look d'enfer</p>
        </div>
        <div class="modele">
            <img src="images/Ferrari Testarossa 2.jpg" alt="Ferrari Testarossa 2" title="Ferrari Testarossa 2">
            <p class="autonom">De l'air !</p>
        </div>
        <div class="modele">
            <img src="images/Ferrari Testarossa 3.jpg" alt="Ferrari Testarossa 3" title="Ferrari Testarossa 3">
            <p class="autonom">Vrouuuum</p>
        </div>
        <div class="modele">
            <img src="images/Ferrari Testarossa 4.jpg" alt="Ferrari Testarossa 4" title="Ferrari Testarossa 4">
            <p class="autonom">Full cuir</p>
        </div>
    </div>
    <p>Les années 1980 ont clairement été l’âge d’or de l’entreprise italienne. C’est à cette époque qu’elle connait le plus de collaborations.</p><br>
    <div class="gallery">
        <div class="modele">
            <img src="images/last.jpeg" alt="Sergio Pininfarina Hommage" title="Sergio Pininfarina Hommage">
        </div>
        <div class="modele">
            <img src="images/last2.jpg" alt="Sergio Pininfarina Hommage 2" title="Sergio Pininfarina Hommage 2">
        </div>
    </div>
    <p>Le célèbre styliste automobile italien Sergio Pininfarina, patron du groupe homonyme, est décédé 3 juillet 2012 à l'âge de 85 ans</p><br>
</main>

<!------Include the footer of the website----->
<?php require('footer.php'); ?>