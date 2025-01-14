<!-- Dans le fichier `User.php` vous allez définir une classe `User`. Votre classe a 3 attributs :

- id qui est un int
- username qui est une string
- password qui est une string

Cette classe doit avoir un constructeur ainsi que des getters et setters pour chacun des attributs.

Le constructeur doit recevoir les attributs dans ses arguments. -->



<?php

class User
{

    public function __construct(private int $id, private string $username, private string $password) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }




    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


    public function getPassword(): string
    {

        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
