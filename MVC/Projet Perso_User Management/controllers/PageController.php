<?php

// Le contrôleur reçoit la demande du routeur et exécute la logique associée à chaque page.

class PageController
{
    public function home(): void
    {

        $route = "home";
        require "views/home.php";
    }

    public function addUsersPage(): void
    {

        $route = "add";
        require "views/add-user.php";
    }
}
