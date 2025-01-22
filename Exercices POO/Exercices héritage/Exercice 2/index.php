<?php
// Instanciez un `Character`, un `Warrior` et un `Mage` et faites les se présenter.

// Puis pour le `Warrior`, faites le se présenter et annoncer son niveau de vie et d'énergie.

// Puis pour le `Mage`, faites le se présenter et annoncer son niveau de vie et de mana.






require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Mage.php';

$character = new Character();
$character->setName("Neutre");
$character->setLife(12);

echo "{$character->introduce()}<br>";
// echo "{$warrior->introduce()}<br>";
// echo "{$mage->introduce()}<br>";




$warrior = new Warrior(150, "Conan", 80);
echo $warrior->introduce() . "<br>";
echo "Niveau de vie du Warrior : {$warrior->getLife()}<br>";
echo "Énergie du Warrior : {$warrior->getEnergy()}<br>";

$mage = new Mage(120, "Gandalf", 60);
echo $mage->introduce() . "<br>";
echo "Niveau de vie du Mage : {$mage->getLife()}<br>";
echo "Mana du Mage : {$mage->getMana()}<br>";
