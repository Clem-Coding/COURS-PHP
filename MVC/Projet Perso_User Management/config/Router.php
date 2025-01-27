<?php

// Classe Router qui analyse l'URL demandée par l'utilisateur
class Router
{
    public function __construct() {}


    public function handleRequest(array $get): void
    {
        if (isset($get["route"])) {
            if ($get["route"] === "add" && $_SERVER['REQUEST_METHOD'] === 'GET') {

                $pageController = new PageController();
                $pageController->addUsersPage();
            } elseif ($get["route"] === "add" && $_SERVER['REQUEST_METHOD'] === 'POST') {

                $userController = new UserController();
                $userController->addUser();
            } elseif ($get["route"] === "home") {

                $pageController = new PageController();
                $pageController->home();
            } elseif ($get["route"] === "list") {

                $userController = new UserController();
                $userController->showUsers();
            }
        } else {

            $pageController = new PageController();
            $pageController->home();
        }
    }
}
