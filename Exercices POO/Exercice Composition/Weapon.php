<?php

//  Votre classe `Weapon` aura comme attributs :

// - `name` qui est une string privée
// - `damages` qui est un int privé

// Elle aura un constructeur qui prend les attributs en argument.
// Elle aura un getter et un setter pour chacun des attributs.

// Elle aura également une méthode publique `strike` qui retourne la string `"Mais aïeuh! <br>"`. 


class Weapon
{

    public function __construct(private string $name, private int $damages) {}

    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getDamages(): int
    {
        return $this->damages;
    }


    public function setDamages(string $damages): void
    {
        $this->damages = $damages;
    }


    public function strike(): string
    {
        return "Mais aïeuh! <br>";
    }
}
