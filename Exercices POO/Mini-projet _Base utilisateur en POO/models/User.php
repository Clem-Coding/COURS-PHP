<?php

//  ## Étape 2 : Créer la classe User

// Créez un dossier `models` et créez-y un fichier `User.php`.

// Vous allez y définir une classe `User`.

// Votre `User` a 5 attributs private :

// - `id` qui est un int et peut être null, sa valeur par défaut est null
// - `username` qui est une string
// - `email` qui est une string
// - `password` qui est une string
// - `role` qui est une string, sa valeur par défaut est `"USER"`

// Le constructeur de la classe `User` prend en argument les attributs suivants :

// - username
// - email
// - password
// - role

// Il a des getters et setters pour chacun des attributs. 



class User
{

    private $id = null;
    private $username;
    private $email;
    private $password;
    private $role = "USER";


    public function __construct($username, $email, $password, $role = "USER")
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
