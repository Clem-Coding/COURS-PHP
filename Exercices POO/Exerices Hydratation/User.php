<?php
// ## Étape 1 : préparer la classe

// Nous allons créer une classe `User` (dans un fichier `User.php`) qui correspondra à la structure de la table `users` dans notre base de données.

// Notre classe aura donc 4 attributs privés :

// - `id` qui est un int et peut être null
// - `firstName` qui est une string
// - `lastName` qui est une string
// - `email` qui est une string

// L'attribut id sera null par défaut.

// Notre constructeur prendra `firstName`, `lastName` et `email` en paramètres.

// La class `User` aura des getters et setters pour chacun des attributs.


class User
{

    private ?int $id;
    private string $firstName;
    private string $lastName;
    private string $email;


    public function __construct(?int $id = null, string $firstName, string $lastName, string $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->lastName = $email;
    }
}
