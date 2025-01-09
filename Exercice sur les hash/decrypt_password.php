<?php

$password = $_POST['password'];
$hash = $_POST['hashPassword'];



$isPasswordCorrect = password_verify($password, $hash);

if ($isPasswordCorrect === true) {
    echo "Mot de passe correct";
} else {
    echo 'Mot de passe erronné';
}
