<?php


require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/managers/UserManager.php';

// Test méthode addUser()
$user = new User("Dagonet", "grosbebeychat@gmail.com");
$userManager = new UserManager();
$userManager->addUser($user);


var_dump($user);


//Test méthode getAllUSers



$getUsers = $userManager->getAllUsers();
var_dump("Les users", $getUsers);
