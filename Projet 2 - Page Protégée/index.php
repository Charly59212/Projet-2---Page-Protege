<?php
session_start();
// Include the header of the website
require('header.php'); ?>

<main>
    <!------------Page content----------->
    <h2>Bienvenue sur notre site dédié aux youngtimers les plus célèbres</h2>
    <h3>Découvrez les voitures qui ont marqué l’histoire des années 80 !</h3>
    <div class="gallery">
        <div class="modele">
            <img src="images/testarossa.jpg" alt="Ferrari Testarossa" title="Ferrari Testarossa">
            <p class="autonom">Ferrari Testarossa</p>
            <p>La mythique Ferrari Testarossa, célèbre voiture de sport du constructeur automobile italien Ferrari, et du designer Pininfarina. Présentée au Mondial de l'automobile de Paris en 1984, conçue sur une base de Ferrari 512 et produite à 7 177 exemplaires jusqu'en 1996, elle est l'avant-dernière création d'Enzo Ferrari avant la F40.</p>
        </div>
        <div class="modele">
            <img src="images/porsche911.jpg" alt="Porsche 911" title="Porsche 911">
            <p class="autonom">Porsche 911</p>
            <p>La Porsche 911 est une voiture de sport haut de gamme fabriquée par le constructeur automobile allemand Porsche. La première génération est commercialisée en 1964, intégralement conçue par la firme de Stuttgart. Soixante ans plus tard, ce modèle, emblématique de la marque, a conservé son esthétique générale. </p>
        </div>
        <div class="modele">
            <img src="images/M3.jpg" alt="BMW M3" title="BMW M3">
            <p class="autonom">BMW M3</p>
            <p>La première gamme de BMW M3 a été présentée début 1986 en tant que modèle d’homologation pour le championnat allemand de voitures de tourisme et elle était basée sur la gamme E30. La BMW M3, équipée d'un moteur à 16 soupapes, n’était initialement disponible qu’en berline deux portes, suivi du cabriolet en mai 1988.</p>
        </div>
        <div class="modele">
            <img src="images/205 CTI.jpeg" alt="205 CTI" title="205 CTI">
            <p class="autonom">205 CTI</p>
            <p>Fort de sa dynamique de gamme, la Peugeot 205 GTI élargit son offre avec un cabriolet doté d'un arceau et sera baptisée " CTI " qui connaîtra un beau succès commercial. Présentée le 6 mars 1986, la Peugeot 205 CTI 1.6 est équipée du nouveau moteur 1580 cm3 de 115 ch, puis suivra une seconde version 1.9 litres de 105 ch. </p>
        </div>
    </div>
    <?php

    // Check if the user is not logged in
    if (empty($_SESSION['login']) || $_SESSION['login'] !== true) {
        // Show if the user is logged in
        echo '
    <div class="intro">
        <h2>Explorez du contenu exclusif !</h2>
        <p>Pour découvrir le plus célèbre designer de ces voitures de légende,<br> cliquez sur le bouton ci-dessous pour vous connecter :</p>
        <a href="connexion.php" class="btn-connect">Se connecter</a>
    </div>';
    }

    ?> 
    <div class="gallery">
        <div class="modele">
            <img src="images/quattro.jpg" alt="Audi Quattro" title="Audi Quattro">
            <p class="autonom">Audi Quattro</p>
            <p>L'Audi Quattro, comme son nom l'indique, est le premier coupé sportif de grande série à transmission intégrale permanente de la marque, munie d'un turbocompresseur et d'une puissance de 200 chevaux. Les premières voitures de série commercialisées avec ce système ont été produites par la marque Subaru à partir de 1972.</p>
        </div>
        <div class="modele">
            <img src="images/golf.jpg" alt="Golf GTI" title="Golf GTI">
            <p class="autonom">Golf GTI</p>
            <p>Après la Golf 1, la nouvelle Golf GTI deuxième génération arrive sur le marché français. Elle a été entièrement redessinée, possède une carrosserie plus spacieuse, un empattement différent, des suspensions et une direction modifiées. Le moteur est celui de l'ancienne GTI 1800(1 800 cm3 de 112 ch, vitesse max 191 km/h).</p>
        </div>
        <div class="modele">
            <img src="images/delorean.jpg" alt="Porsche 911" title="DeLorean DMC-12">
            <p class="autonom">DeLorean DMC-12</p>
            <p>La DeLorean DMC-12 est une voiture de sport conçue et fabriquée par le constructeur automobile américain DeLorean Motor Company, abrégé DMC. Produite de janvier 1981 à début 1983, elle a reçu quelques restylages. Plus connue sous le simple nom «DeLorean», il s'agit d'un modèle unique de ce constructeur. </p>
        </div>
        <div class="modele">
            <img src="images/countach.jpg" alt="Lamborghini Countach" title="Lamborghini Countach">
            <p class="autonom">Lamborghini Countach</p>
            <p>La Lamborghini Countach de 1989, édition du 25e anniversaire, fut livrée neuf à Monaco le 10 avril 1989. Il s’agit d’un des 650 exemplaires de la série 25 ème anniversaire, en hommage aux vingt-cinq ans de la marque, qui est l’aboutissement de la gamme Countach. Le moteur V12 de 455 ch procure de hautes performances. </p>
        </div>
    </div>
</main>

<!------Include the footer of the website----->

<?php require('footer.php'); ?>