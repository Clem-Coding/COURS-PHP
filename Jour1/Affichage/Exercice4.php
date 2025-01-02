<!-- Exercice 4 : afficher avec boucle et conditions
 Faites en sorte d’afficher, pour chacun des utilisateurs un <li> contenant son nom et prénom et s’il est majeur ou mineur dans le <ul>. -->



<?php
$users = [
    [
        "firstName" => "Bugs",
        "lastName" => "Bunny",
        "age" => 29
    ],
    [
        "firstName" => "Roger",
        "lastName" => "Rabbit",
        "age" => 17
    ]
];
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
</head>

<body>
    <h1>
        Liste des utilisateurs
    </h1>
    <ul>
        <?php

        foreach ($users as $user) {

            if ($user["age"] >= 19) {
                echo "<li>{$user["firstName"]} {$user["lastName"]} majeur";
            } else

                echo "<li>{$user["firstName"]} {$user["lastName"]} mineur";
        };

        ?>

    </ul>
</body>

</html>