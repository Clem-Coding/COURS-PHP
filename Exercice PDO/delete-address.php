<?php
require('connexion.php');


if (isset($_POST['validate'])) {


    if (!empty($_POST['addressId'])) {

        $address_id = htmlspecialchars($_POST['addressId']);

        $query = $db->prepare('DELETE FROM address WHERE id = :id');

        $parameters = [
            'id' => $address_id,

        ];

        $query->execute($parameters);
        echo "Adresse supprimée avec succès.";
    } else {


        echo "Le champ de l'Id n'est pas rempli";
    }
}
