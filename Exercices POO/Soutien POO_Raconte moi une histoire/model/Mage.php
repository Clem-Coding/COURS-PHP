<?php

// La classe Mage hérite de la classe Character.

// Elle a un attribut private :

// $mana qui est un int

// Son constructeur reçoit les attributs $name et $mana en paramètres, puis appelle le constructeur de sa classe parente avec les valeurs suivantes :

// string $name : celui reçu en paramètres
// int $life : 100
// int $strength : 10
// int $agility : 12
// int $intelligence : 15
// int $charisma : un nombre aléatoire entre 8 et 14

// La classe a un getter et un setter public pour l’attribut $mana.




class Mage extends Character
{


    public function __construct(string $name, private int $mana)
    {

        parent::__construct(
            $name,
            100,
            10,
            12,
            15,
            rand(8, 14)
        );
    }




    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function strike(): int
    {
        return rand(0, 1) * $this->strength;
    }

    // La classe a une méthode public supplémentaire :
    // cast() qui ne prend pas de paramètres et retourne un int et retourne un nombre aléatoire entre 0 et 1 multiplié par $intelligence

    public function cast(): int
    {
        return rand(0, 1) * $this->intelligence;
    }
}
