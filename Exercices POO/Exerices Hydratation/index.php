<?php

## Étape 2 : Hydrater depuis un tableau associatif

// Dans un fichier `index.php`, faites un `require` de votre classe `User`.

// ```php
// $superman = [
// 	"first_name" => "Clark",
// 	"last_name" => "Kent",
// 	"email" => "clark.kent@test.fr"
// ];
// ```

// Puis utilisez le tableau associatif `$superman` pour remplir une instance de la classe `User`.$


require "User.php";
require "connexion.php";

$superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];


$user = new User(
    null,
    $superman["first_name"],
    $superman["last_name"],
    $superman["email"]
);



// echo "Prénom : " . $user->getFirstName() . "\n";
// echo "Nom : " . $user->getLastName() . "\n";
// echo "Email : " . $user->getEmail() . "\n";



// ## Étape 3 : Hydrater une instance depuis la BDD

// Faites un `require` de votre fichier `connexion.php` en haut de votre fichier `index.php`.

// Dans votre fichier `index.php` :

// Exécutez une requête SQL qui vous retourne le premier `user` stocké dans la base de données.

// Utilisez le retour de la requête pour remplir une instance de la classe `User`.


$query = $db->prepare('SELECT * FROM users WHERE id = 1');
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);




$user1 = new User(
    $result["id"],
    $result["first_name"],
    $result["last_name"],
    $result["email"]
);

// var_dump("USER 1", $user1);





// ## Étape 4 : Hydrater un tableau d'instances depuis la BDD

// Dans votre fichier `index.php` :

// Utilisez PDO pour exécuter une requête SQL qui vous retourne tous les `users` stockés dans la base de données.

// Utilisez le retour de la requête pour remplir un tableau d'instances de la classe `User`, une ligne de votre table
// doit correspondre à une instance de la classe `User`.


$query = $db->prepare('SELECT * FROM users');
$query->execute();
$allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump("ALL USERS", $allUsers);


foreach ($allUsers as $user) {
    $users[] = new User(
        $user["id"],
        $user["first_name"],
        $user["last_name"],
        $user["email"]
    );
};


var_dump("LES USERS INSTANCE : ", $users);


// ## Étape 5 : Sauvegarder dans la BDD

// Instanciez une nouvelle instance de la classe `User` avec les informations suivantes :

//     - `firstName` : Clark
//     - `lastName` : Kent
//     - `email` : clark.kent@test.fr

//     Utilisez PDO pour créer une requête SQL qui va ajouter un nouveau `user` dans la base de données à partir de votre instance de classe.

//     Utilisez la méthode lastInsertId de PDO (https://www.php.net/manual/en/pdo.lastinsertid.php )//
// pour récupérer l'id de votre nouveau user et mettre à jour votre instance de classe.


$clarkKent = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];
$newUser = new User(
    null,
    $clarkKent["first_name"],
    $clarkKent["last_name"],
    $clarkKent["email"]
);


$query = $db->prepare('INSERT INTO users (first_name, last_name, email) VALUES (:firstName, :lastName, :email)');



$parameters = [
    'firstName' => $newUser->getFirstName(),
    'lastName' => $newUser->getLastName(),
    'email' => $newUser->getEmail()
];


$query->execute($parameters);
