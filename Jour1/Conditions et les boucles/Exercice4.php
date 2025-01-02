<!-- Exercice 4 : tableaux imbriqués

$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

Parcourez le tableau $users et affichez le prénom et le nom de chaque utilisateur en revenant à la ligne entre chaque utilisateur. -->



<?php 




$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];


foreach($users as $user) {
    echo "{$user["firstName"]} {$user["lastName"]} <br>";
}



?>


