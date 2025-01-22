<?php

// Warrior

// La classe Warrior hérite de la classe Character.

// Elle a un attribut private :

//     $rage qui est un int

// Son constructeur reçoit les attributs $name et $rage en paramètres, puis appelle le constructeur de sa classe parente avec les valeurs suivantes :

//     string $name : celui reçu en paramètres
//     int $life : 150
//     int $strength : 14
//     int $agility : 12
//     int $intelligence : 10
//     int $charisma : un nombre aléatoire entre 8 et 14

// La classe a un getter et un setter public pour l’attribut $rage.

// La classe a une méthode public supplémentaire :

//     strike() qui ne prend pas de paramètres et retourne un int et retourne un nombre aléatoire entre 0 et 1 multiplié par $strength




class Warrior extends Character
{


    public function __construct(string $name, private int $rage)
    {

        parent::__construct(
            $name,
            150,
            14,
            12,
            10,
            rand(8, 14)
        );
    }




    public function getRage(): int
    {
        return $this->rage;
    }

    public function setRage(int $rage): void
    {
        $this->rage = $rage;
    }




    public function strike(): int
    {
        return rand(0, 1) * $this->strength;
    }
}
