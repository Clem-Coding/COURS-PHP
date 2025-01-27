<?php

// Le contrôleur reçoit la demande du routeur et exécute la logique associée à chaque page.

class UserController
{

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function home(): void
    {

        //définition de la variable $route qui va être transmise au layout.phtml grace au require
        $route = "home";
        require "templates/layout.phtml";
    }

    public function show(): void
    {


        $route = "show_user";
        require "templates/layout.phtml";
    }
    public function createUser(): void
    {


        $route = "create_user";
        require "templates/users/create.phtml";
    }


    public function checkCreate(): void
    {



        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
        $lastName = isset($_POST['lastName']) ? $_POST['LastName'] : null;

        if ($email && $firstName && $lastName) {

            $user = new User($email, $firstName, $lastName);
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);


            $userManager = new UserManager($db);
            $userManager->create($user);
        }

        header('Location: index.php');
        exit();
    }

    public function update(): void
    {

        //idem
        $route = "update_user";
        require "templates/layout.phtml";
    }


    public function checkUpdate(): void
    {

        //idem
        $route = "check_update_user";
        require "templates/layout.phtml";
    }


    public function delete(): void
    {

        //idem
        $route = "delete_user";
        require "templates/layout.phtml";
    }


    public function list(): void
    {

        //idem

        require "templates/layout.phtml";
    }
}
