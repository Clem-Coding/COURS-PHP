<?php

require "model/Chapter.php";
require "model/Character.php";
require "model/Warrior.php";
require "model/Mage.php";
require "model/Rogue.php";
require "model/Story.php";



// Tests affichage des Classes









//CHARACTER (supprimer "abstract" de la classe pour test)

// $character = new Character("Superman", 50, 50, 70, 58, 44);

// echo "<pre>";
// var_dump($character);
// echo "</pre>";

// $character->takeDamages(15);
// echo "La vie restante est : {$character->getLife()}";




//WARRIOR 
$warrior1 = new Warrior("Conan", 10);
$warrior2 = new Warrior("Babar", 10);

echo "<pre>";
var_dump("LE WARRIOR", $warrior1);
echo "</pre>";

echo "Le résultat du strike : {$warrior1->strike()} <br>";

//MAGE
$mage1 = new Mage("Hermione", 50);
$mage2 = new Mage("Gandalf", 30);

echo "<pre>";
var_dump("LE MAGE", $mage1);
echo "</pre>";

echo "Le résultat du cast : {$mage1->cast()} <br>";


//Rogue
$rogue1 = new Rogue("Fantomette", 30);
$rogue2 = new Rogue("Grigou", 30);

echo "<pre>";
var_dump("LE ROGUE", $rogue1);
echo "</pre>";

echo "Le résultat du stab : {$rogue1->stab()} <br>";


// Commençons notre histoire

// Commençons par instancier une classe Story.

// Vous allez créer 2 Mages, 2 Warriors et 2 Rogue (toustes avec des noms différents) et les ajouter à la Story.

// Nous allons ensuite créer le premier Chapter de notre histoire.

// Son titre sera “Introduction” et son contenu verra les personnages se présenter :


$hermione = new Character("Hermione", 50, 50, 70, 58, 44);
$mage1 = new Mage("Hermione", 50);


$story = new Story();
$story->addCharacter($mage1);
$story->addCharacter($mage2);
$story->addCharacter($warrior1);
$story->addCharacter($warrior2);
$story->addCharacter($rogue1);
$story->addCharacter($rogue2);

echo "<pre>";
var_dump($story);
echo "</pre>";


// Nous allons ensuite créer le premier Chapter de notre histoire.

// Son titre sera “Introduction” et son contenu verra les personnages se présenter :

//CHAPTER




$content = "- Bonjour, je m'appelle {$mage1->getName()}\n";
$content .= "- Bonjour, je m'appelle {$mage2->getName()}\n";
$content .= "- Bonjour, je m'appelle {$warrior1->getName()}\n";
$content .= "- Bonjour, je m'appelle {$warrior2->getName()}\n";
$content .= "- Bonjour, je m'appelle {$rogue1->getName()}\n";
$content .= "- Bonjour, je m'appelle {$rogue2->getName()}\n";



$chapter1 = new Chapter("Chapitre 1 : Introduction", $content);
echo "<pre>";
var_dump($chapter1);
echo "</pre>";




// Création du chapitre 2 (Premier groupe)





// $contentGroup1 = $mage1->introduce() . "\n";
// $contentGroup1 .= $mage1->getLife() . "\n";
// $contentGroup1 .= $mage1->getStrength() . "\n";
// $contentGroup1 .= $mage1->getIntelligence() . "\n";


$contentGroup1 = "Il était une fois, {$mage1->getName()}, une magicienne puissante dotée d'une grande réserve de points de vie : {$mage1->getLife()}. ";
$contentGroup1 .= "Elle possédait une force de {$mage1->getStrength()} qui, bien que modérée, lui permettait de se défendre face à des adversaires redoutables. ";
$contentGroup1 .= "Cependant, son intelligence de {$mage1->getIntelligence()} était ce qui la distinguait des autres, lui permettant de résoudre des énigmes et d'appréhender les mystères du monde. ";
$contentGroup1 .= "Son charisme, évalué à {$mage1->getCharisma()}, était si puissant qu'il lui permettait de convaincre même les créatures les plus menaçantes de son côté. ";
$contentGroup1 .= "Elle savait que son charisme pouvait changer le cours de toute bataille ou négociation.";

$contentGroup1 .= "\n\nVoici maintenant l'autre mage de notre groupe, {$mage2->getName()}.\n";
$contentGroup1 .= "{$mage2->getName()} était un mage sage et expérimenté. Avec {$mage2->getLife()} points de vie, il faisait preuve d'une grande résistance face aux dangers. ";
$contentGroup1 .= "Sa force, mesurée à {$mage2->getStrength()}, était suffisante pour faire face aux ennemis, mais ce n'était pas ce qui faisait sa plus grande force. ";
$contentGroup1 .= "En revanche, son agilité de {$mage2->getAgility()} n'était pas exceptionnelle, mais son esprit affûté compensait largement cette faiblesse. ";
$contentGroup1 .= "Il possédait une intelligence remarquable de {$mage2->getIntelligence()}, capable de déchiffrer des secrets anciens et des mystères incompréhensibles pour la plupart. ";
$contentGroup1 .= "Avec un charisme de {$mage2->getCharisma()}, il réussissait à rallier de nombreux alliés dans sa quête pour percer les secrets du monde et combattre les forces obscures.";


$chapter2 = new Chapter("Chapitre 2 : Le Groupe des Magiciens", $contentGroup1);

echo "<pre>";
var_dump($chapter2);
echo "</pre>";



echo "<h2> {$chapter2->getTitle()} </h2>";
echo "<p> {$chapter2->getContent()} </p>";
