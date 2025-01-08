<?php
require('connexion.php');


if (isset($_POST['validate'])) {


    if (!empty($_POST['street']) && !empty($_POST['zipcode']) && !empty($_POST['city'])) {


        //htmlspecialchars — Convertit les caractères spéciaux en entités HTML; conseillé pour éviter 
        //certains types de vulnérabilités liées à la sécurité, comme les attaques de type Cross-Site Scripting (XSS).
        // ex : <script> devient "&lt;script&gt"


        $user_street = htmlspecialchars($_POST['street']);
        $user_zipcode = htmlspecialchars($_POST['zipcode']);
        $user_city = htmlspecialchars($_POST['city']);

        $query = $db->prepare('INSERT INTO address (street, city, zipcode) VALUES( :street, :city, :zipcode)');



        $parameters = [
            'street' => $user_street,
            'city' => $user_city,
            'zipcode' => $user_zipcode
        ];

        $query->execute($parameters);
        echo "Adresse ajoutée avec succès.";
    } else {


        echo "Les champs ne sont pas tous remplis";
    }
}
