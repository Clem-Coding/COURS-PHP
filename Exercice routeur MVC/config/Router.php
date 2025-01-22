<?php

//Class Router qui analyse l'URL demandée par l'utilisateur 
class Router
{
    public function __construct() {}

    public function handleRequest(array $get): void
    {


        //Redirection vers le contrôleur : Le routeur appelle le contrôleur approprié (PageController dans notre cas) 
        //pour effectuer une action spécifique (afficher la page d'accueil, la page à propos, etc.) grace aux instances
        if (isset($get["route"]) && $get["route"] === "a-propos") {
            $pageController = new PageController();
            $pageController->about();
        } elseif (isset($get["route"]) && $get["route"] === "contact") {

            $pageController = new PageController();
            $pageController->contact();
        } elseif (!isset($get["route"])) {
            $pageController = new PageController();
            $pageController->home();
        } else {

            $pageController = new PageController();
            $pageController->notFound();
        }
    }
}
