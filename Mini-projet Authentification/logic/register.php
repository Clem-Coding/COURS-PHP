<?php


require('../connexion.php');



if (isset($_POST["validate"])) {
    if (
        !empty($_POST["first_name"]) &&
        !empty($_POST["last_name"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"])
    ) {


        $user_first_name = htmlspecialchars($_POST['first_name']);
        $user_last_name = htmlspecialchars($_POST['last_name']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);


        $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES( :email, :password, :first_name, :last_name)');

        $parameters = [
            'email' => $user_email,
            'password' => $hash_password,
            'first_name' => $user_first_name,
            'last_name' => $user_last_name
        ];

        $query->execute($parameters);

        echo "Enregistrement réalisé avec succès.";
        header('Location: ../index.php?route=homepage');
    } else {
        echo "Les champs de formulaire ne sont pas tous remplis";
    }
}
