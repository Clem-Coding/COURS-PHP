<!-- Exercice 3 : tableau associatif

$user = [
    "name" => "James",
    "age" => 28
];

Parcourez avec une boucle la tableau $user et affichez à chaque fois la clé et la valeur en revenant à la ligne entre chaque.

    💡 Résultat attendu :
    My name is James.
    My age is 28. -->

<?php

$user = [
    "name" => "James",
    "age" => 28
];

foreach ($user as $key => $value) {
    echo "My $key is $value.<br>";
}

?>
