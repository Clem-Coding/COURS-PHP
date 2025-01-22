<?php

require("User.php");



class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function addBookToFavorites(string $book): array
    {
        $this->favoriteBooks[] = $book;

        return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array
    {
        foreach ($this->favoriteBooks as $key => $favoriteBook) {
            if ($favoriteBook === $book) {
                unset($this->favoriteBooks[$key]);
            }
        }

        return $this->favoriteBooks;
    }
}



// 1. Créez un lecteur et ajoutez deux livres à sa liste de favoris. 

$reader = new Reader("reader@gmail.com", "password1234");
$favoriteBooks = $reader->addBookToFavorites("Titre de livre 1");
$favoriteBooks = $reader->addBookToFavorites("Titre de livre 2");


// 2. Affichez la liste de ses livres favoris
var_dump("La liste des livre favoris", $favoriteBooks);


// 3. Retirez l'un des deux livres.

$favoriteBooks = $reader->removeBookFromFavorites("Titre de livre 1");

// 4. Affichez la liste de ses livres favoris

var_dump("La liste des livre après remove", $favoriteBooks);


// 5. Affichez son email et son mot de passe sans modifier les classes.

var_dump("les éléments de login du reader :", $reader->login());
