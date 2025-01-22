<?php

// Le contrôleur reçoit la demande du routeur et exécute la logique associée à chaque page.

class PageController
{
    public function home(): void
    {

        //définition de la variable $route qui va être transmise au layout.phtml grace au require
        $route = "home";
        require "templates/layout.phtml";
    }

    public function about(): void
    {

        //idem
        $route = "about";
        require "templates/layout.phtml";
    }
    public function notFound(): void
    {

        //idem
        $route = "notFound";
        require "templates/layout.phtml";
    }


    public function contact(): void
    {

        //idem
        $route = "contact";
        require "templates/layout.phtml";
    }
}
