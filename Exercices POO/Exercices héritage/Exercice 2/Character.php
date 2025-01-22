<?php


// Vous allez créer une class `Character`. 

// Un `Character` a 2 attributs :

// - `life` qui est un `int` protected
// - `name` qui est une `string`protected

// Un `Character` a des getters et setters pour ses deux attributs. Son constructeur ne prend pas d'argument et ne fait rien.

// Un `Character` a une méthode protected : `introduce` qui retourne une string qui dit `"Bonjour je m'appelle " + le nom du Character`.




class Character
{

    protected int $life;
    protected string $name;


    public function __construct() {}


    public function getLife(): int
    {
        return $this->life;
    }


    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function introduce(): string
    {
        return "Bonjour, je m'appelle {$this->name}.";
    }
}
