
<!-- Exercice 1 : boucle simple

$animals = ["Chat", "Chien", "Lapin", "Souris"];

Parcourez le tableau $animals et affichez chacun des animaux en revenant à la ligne entre chaque. -->

<?php

$animals = ["Chat", "Chien", "Lapin", "Souris"];
$i = 0;  

foreach($animals as $animal) 
{
    echo "$animal <br>";
}

?>
