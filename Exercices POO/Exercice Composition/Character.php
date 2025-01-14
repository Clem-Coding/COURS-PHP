
<?php

require "Weapon.php";

// Votre classe `Character` aura comme attributs :
// - `name` qui est une string privée
// - `weapon` qui est une `Weapon` privée

// Elle aura un constructeur qui prend son attribut `name` en argument et initialise l'attribut `weapon` avec un `name` vide et des `damages` à 0.

// Elle aura un getter et un setter pour chacun des attributs.

// Elle aura également une méthode publique `fight` qui retourne le résultat de la méthode `strike` de sa `weapon`.


class Character
{

    private Weapon $weapon;


    public function __construct(private string $name)
    {
        $this->weapon = new Weapon("", 0);
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function fight(): string
    {
        return $this->weapon->strike();
    }
}
