<?php
require('connexion.php');

if (isset($_POST['validate'])) {

    if (!empty($_POST['street']) && !empty($_POST['zipcode']) && !empty($_POST['city']) && !empty($_POST['userId'])) {


        $user_street = htmlspecialchars($_POST['street']);
        $user_zipcode = htmlspecialchars($_POST['zipcode']);
        $user_city = htmlspecialchars($_POST['city']);
        $user_id = htmlspecialchars($_POST['userId']);

        $query = $db->prepare('UPDATE address SET street = :street, city = :city, zipcode = :zipcode WHERE id = :id');

        $parameters = [
            'id' => $user_id,
            'street' => $user_street,
            'city' => $user_city,
            'zipcode' => $user_zipcode
        ];

        $query->execute($parameters);
        echo "Adresse modifiée avec succès.";
    } else {


        echo "Les champs ne sont pas tous remplis";
    }
}
