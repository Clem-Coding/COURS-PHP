<?php
session_start();

if (isset($_POST['validate'])) {
    if (!empty($_POST['pseudo'])) {
        $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
        header("Location:welcome.php");
    } else {
        echo "Le champ de formulaire n'est pas rempli.";
    }
}
