<!-- Exercice 3 : afficher avec une boucle
Faites en sorte d’afficher, pour chacun des utilisateurs un <li> contenant son nom et prénom dans le <ul>. -->


<?php
$users = [
    [
        "firstName" => "Bugs",
        "lastName" => "Bunny"
    ],
    [
        "firstName" => "Roger",
        "lastName" => "Rabbit"
    ]
];
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
</head>

<body>
    <h1>
        Liste des utilisateurs
    </h1>
    <ul>
        <?php foreach ($users as $user) { ?>
            <li>
                <?= "{$user["firstName"]} {$user["lastName"]}"; ?>
            </li>
        <?php } ?>

    </ul>
</body>

</html>