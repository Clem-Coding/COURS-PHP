<?php

// # La classe Warrior

// un attribut private : `energy` qui est un int

// Elle a un getter et un setter pour cet attribut.

// Son constructeur prend `life`, `name` et `energy` en paramètre et initialise les attributs.



class Warrior extends Character
{
    private int $energy;

    public function __construct(int $life, string $name, int $energy)
    {
        parent::__construct();
        $this->life = $life;
        $this->name = $name;
        $this->energy = $energy;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
}
