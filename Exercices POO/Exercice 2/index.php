<?php

require 'Character.php';


$character = new Character(1);


echo $character->getFullName(); // Affiche "Jane Joe"

// Utilisation des setters pour modifier le prénom et le nom de famille
$character->setFirstName("Sarah");
$character->setLastName("Connor");

// Affichage du nom complet après modification
echo "<br>"; // Pour une séparation visuelle dans le navigateur
echo $character->getFullName(); // Affiche "Sarah Connor"
