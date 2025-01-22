<?php
// La classe Rogue hérite de la classe Character.

// Elle a un attribut private :

//     $energy qui est un int

// Son constructeur reçoit les attributs $name et $energy en paramètres, puis appelle le constructeur de sa classe parente avec les valeurs suivantes :

//     string $name : celui reçu en paramètres
//     int $life : 100
//     int $strength : 12
//     int $agility : 15
//     int $intelligence : 11
//     int $charisma : un nombre aléatoire entre 8 et 14

// La classe a un getter et un setter public pour l’attribut $energy.

// La classe a une méthode public supplémentaire :

//     stab() qui ne prend pas de paramètres et retourne un int et retourne un nombre aléatoire entre 0 et 1 multiplié par $agility




class Rogue extends Character
{


    public function __construct(string $name, private int $energy)
    {

        parent::__construct(
            $name,
            100,
            12,
            15,
            11,
            rand(8, 14)
        );
    }




    public function geEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function strike(): int
    {
        return rand(0, 1) * $this->strength;
    }

    // La classe a une méthode public supplémentaire :
    //  stab() qui ne prend pas de paramètres et retourne un int et retourne un nombre aléatoire entre 0 et 1 multiplié par $agility

    public function stab(): int
    {
        return rand(0, 1) * $this->agility;
    }
}
