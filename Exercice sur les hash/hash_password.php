<?php

if (isset($_POST['validate'])) {

    if (isset($_POST['password']) && !empty($_POST['password'])) {

        $user_password = $_POST['password'];
        $hash = password_hash($user_password, PASSWORD_DEFAULT);
        echo $hash;
    } else {
        echo "Veuillez saisir un mot de passe";
    }
}
