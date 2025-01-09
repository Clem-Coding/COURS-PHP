<?php

session_start();

require('../connexion.php');



if (isset($_POST["validate"])) {
    if (
        !empty($_POST["email"]) &&
        !empty($_POST["password"])
    ) {



        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);


        // var_dump($user_password);




        $checkIfUserExists = $db->prepare('SELECT * FROM users WHERE email = :email');
        $checkIfUserExists->execute(['email' => $user_email]);

        if ($checkIfUserExists->rowCount() > 0) {


            $usersInfos = $checkIfUserExists->fetch();

            if (password_verify($user_password, $usersInfos['password'])) {


                $_SESSION['firstname'] = $usersInfos['first_name'];
                $_SESSION['lastname'] = $usersInfos['last_name'];

                echo "L'utilisateur est bien connecté au site";
                header('Location: ../index.php?route=homepage');
            } else {

                echo "Le mot de passe est incorrect";
            }
        } else {
            echo "L'utilisateur n'existe pas dans le base de données";
        }
    } else {
        echo "Les champs de formulaire ne sont pas tous remplis";
    }
}
