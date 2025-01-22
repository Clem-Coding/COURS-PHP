<?php
// Toutes vos classes doivent avoir des getters et setters pour tous leurs attributs, et leurs id peuvent être null et le sont par défaut.
// Les constructeurs des classes doivent prendre en paramètres tous les champs sauf l'id.

// Attention le nom de la classe est au singulier même si celui de la table est au pluriel.

// La classe User
// Correspond à la table users.

// La classe Category
// Correspond à la table categories.

// La classe Post
// Correspond à la table posts. L'auteur d'un Post est un User.

class User
{
    private ?int $id = null;


    public function __construct(private string $username, private string $email, private string $password, private string $role, private DateTime $createdAt) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
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


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }




    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }


    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
