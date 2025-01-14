<?php

require "Character.php";

// Dans votre fichier `game.php`, créez un personnage avec le `name` Ragnar.

// Donnez lui ensuite une `Weapon` avec le name `"Sword"` et des damages de 10.

// Affichez avec un écho le nom du Character, le name de sa weapon et les damages de sa weapon.

// Affichez le résultat de sa méthode `fight`.


$character = new Character("Ragnar");

$weapon = new Weapon("Sword", 10);

$character->getWeapon()->setName($weapon->getName());
$character->getWeapon()->setDamages($weapon->getDamages());

echo "Character name: {$character->getName()} <br>";
echo "Weapon name: {$character->getWeapon()->getName()} <br>";
echo "Weapon Damages: {$character->getWeapon()->getDamages()} <br>";
echo "Fight result: {$character->fight()} <br>";
