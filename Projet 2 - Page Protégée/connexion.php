<?php
// Start the session
session_start();

// Password for accessing the bio page
$correctPassword = 'Pininfarina80';

// Form with a password required
if (isset($_POST['password'])) {
    // If the password is correct, connect the user
    if ($_POST['password'] === $correctPassword) {
        $_SESSION['login'] = true;
        // Redirect the user to the bio page
        header('Location: bio.php');
        exit;
    } else {
        // Display an error message if the password is incorrect
        $error_message = "Mot de passe incorrect. Veuillez réessayer.";
    }
}

// Include the header of the website
require('header.php'); 
?>

<!--------Login form------->
<main class="form-container">
    <h2>Veuillez vous connecter pour accéder à la biographie</h2>
    <form action="connexion.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" placeholder="Entrez votre nom" autocomplete="username" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">
        
        <!-- Submit button to send the form -->
        <input id="bio_button" type="submit" value="Accéder à la biographie">
    </form>

    <!-----Display the error message------->
    <p class="error-message">
        <?php if (isset($error_message)) echo $error_message; ?>
    </p>
</main>

<!------Include the footer of the website----->
<?php require('footer.php'); ?>