<!-- Exercice 2 : boucle et condition

$numbers = [28, 32, 44, -67, 18, 24, -98];

Parcourez le tableau $numbers et affichez les nombres négatifs en revenant à la ligne entre chaque. -->

<?php 

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $number) {
    if ($number <0) {
        echo "$number <br>";
    }
}

?>


