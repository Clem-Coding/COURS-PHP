<?php

// Character

// Character est une classe abstraite qui contient les attributs protected suivants :

//     string $name
//     int $life
//     int $strength
//     int $agility
//     int $intelligence
//     int $charisma

// Son constructeur prend tous les attributs en paramètres.

// Elle a des getters et setters public pour tous les attributs.




abstract class Character
{
    public function __construct(
        protected string $name,
        protected int $life,
        protected int $strength,
        protected int $agility,
        protected int $intelligence,
        protected int $charisma
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    public function getAgility(): int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): void
    {
        $this->agility = $agility;
    }

    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    public function getCharisma(): int
    {
        return $this->charisma;
    }

    public function setCharisma(int $charisma): void
    {
        $this->charisma = $charisma;
    }


    // Elle a également 2 méthodes public :

    //     introduce qui ne prend pas de paramètres et renvoie une string qui dit "Bonjour, je m'appelle [nom du Character]".
    //     takeDamages(int $damages) qui ne retourne rien et soustrait $damages à l’attribut $life du Character

    public function introduce(): string
    {
        return "Bonjour, je m'appelle {$this->name}";
    }

    public function takeDamages(int $damages): void
    {
        $this->life -= $damages;
    }
}
