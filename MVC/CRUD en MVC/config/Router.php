<?php

// Vous allez utiliser ce que vous avez appris dans l’exercice précédent pour mettre en place un routeur. Voici la liste des routes et des méthodes correspondantes :

//     index.php?route=show_user -> la méthode show() du UserController
//     index.php?route=create_user -> la méthode create() du UserController
//     index.php?route=check_create_user -> la méthode checkCreate() du UserController
//     index.php?route=update_user -> la méthode update() du UserController
//     index.php?route=check_update_user -> la méthode checkUpdate() du UserController
//     index.php?route=delete_user -> la méthode delete() du UserController
//     Dans tous les autres cas : la méthode list() du UserController


class Router
{


    public function __construct() {}

    public function handleRequest(array $get): void
    {


        //Redirection vers le contrôleur : Le routeur appelle le contrôleur approprié (PageController dans notre cas) 
        //pour effectuer une action spécifique (afficher la page d'accueil, la page à propos, etc.) grace aux instances
        if (isset($get["route"]) && $get["route"] === "show_user") {
            $userController = new UserController();
            $userController->show();
        } elseif (isset($get["route"]) && $get["route"] === "create_user") {

            $userController = new UserController();
            $userController->createUser();
        } elseif (isset($get["route"]) && $get["route"] === "update-user") {

            $userController = new UserController();
            $userController->update();
        }
    }
}
