<?php

// Créez un fichier index.ph pdans lequel vous allez instancier puis var_dump un User, une Category et un Post.




require_once 'model/Users.php';
require_once 'model/Categories.php';
require_once 'model/Posts.php';
require_once 'managers/UseManager.php';


$user = new User("clem", "email@example.com", "password123", "admin", new DateTime("2021-01-21 07:03:04"));

$category = new Category("Technologie", "Des articles sur les nouvelles technologies.");

$post = new Post("Mon premier article", "Voici l'extrait de l'article.", "Voici le contenu de l'article.", $user, new DateTime("2021-01-21 07:03:02"));


echo "<pre>";
var_dump($user);
var_dump($category);
var_dump($post);
echo "</pre>";






// Dans l'index ajoutez votre Category à votre Post et votre Post à votre Category.

// Faites des var_dump du Post et de la Category 


$post->addCategory($category);
$category->addPost($post);



echo "<h2>Affichage du Post :</h2>";
echo "<pre>";
var_dump($post);
echo "</pre>";

echo "<h2>Affichage de la Category :</h2>";
echo "<pre>";
var_dump($category);
echo "</pre>";


// test managers

$db = require_once __DIR__ . '/Connexion.php';
$userManager = new UserManager($db);

// $userToAdd = new User("nouveau_username", "nouveau_email@example.com", "nouveau_mot_de_passe", "admin", new DateTime("2021-01-21 07:03:02"));
// $userManager = new UserManager($db);
// $userManager->create($userToAdd);

// $userToUpdate = new User("utilisateur modifié", "mail_modified@test.com", "mot_passse_modified", "admin", new DateTime("2021-01-21 07:03:02"));
// $userToUpdate->setId(10);
// $userManager->update($userToUpdate);


$userManager->delete(12);
