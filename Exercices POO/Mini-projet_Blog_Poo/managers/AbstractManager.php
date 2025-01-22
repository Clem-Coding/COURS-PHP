<?php

// La classe AbstractManager
// La classe AbstractManager est une classe abstraite.

// Elle contient un attribut protected : db qui est une classe PDO.

// Dans son constructeur elle initialise la connection à votre base de données et la stoke dans l'attribut db.

// Elle n'a ni getter ni setter.




abstract class AbstractManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}
