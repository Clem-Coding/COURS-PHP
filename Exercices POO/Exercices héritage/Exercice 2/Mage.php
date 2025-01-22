<?php


// un attribut private : `mana` qui est un int

// Elle a un getter et un setter pour cet attribut.

// Son constructeur prend `life`, `name` et `mana` en paramètre et initialise les attributs.



class Mage extends Character
{
    private int $mana;

    public function __construct(int $life, string $name, int $mana)
    {

        $this->life = $life;
        $this->name = $name;
        $this->mana = $mana;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }


    public function introduceMage(): string
    {
        return $this->introduce();
    }
}
