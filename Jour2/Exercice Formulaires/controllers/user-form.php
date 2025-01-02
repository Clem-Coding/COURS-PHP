<?php

// print_r($_POST);

$email = $_POST["email"];
$password  = $_POST["password"];
$confirmPassword  = $_POST["confirmPassword"];



if ($password === $confirmPassword) {
    echo "Vérification des mots de passe : Ok <br>";
} else {
    echo "Vérification des mots de passe : NOK <br>";
}



if (isset($_POST["checkbox"])) {
    echo "Email : $email | Mot de passe : $password | Newsletter : Oui";
} else {

    echo "Email : $email | Mot de passe : $password | Newsletter : non";
}
