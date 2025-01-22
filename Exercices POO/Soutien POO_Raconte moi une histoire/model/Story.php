<?php
// Story

// La classe Story est notre classe qui englobe les autres.

//     💍 Une classe pour les gouverner toutes et dans les ténèbres, euh non pardon

// Elle a deux attributs private :

//     $characters qui est un tableau qui contiendra des Character, le tableau est vide par défaut
//     $chapters qui est un tableau qui contiendra des Chapter, le tableau est vide par défaut

// Son constructeur ne prend pas de paramètres et ne fait rien.

// Elle a des getters et setters publicpour ses attributs.



class Story
{

    public function __construct(private array $characters = [], private array $chapters = []) {}

    public function getCharacters(): array
    {
        return $this->characters;
    }

    public function setCharacters(array $characters): void
    {
        $this->characters = $characters;
    }


    public function getChapters(): array
    {
        return $this->chapters;
    }

    public function setChapters(array $chapters): void
    {
        $this->chapters = $chapters;
    }


    // Elle a également 4 méthodes public :

    //     addChapter(Chapter $chapter) : void qui ajoute $chapter au tableau $chapters
    //     removeChapter(Chapter $chapter): void qui retire $chapter du tableau $chapters
    //     addCharacter(Character $character) : void qui ajoute $character au tableau $characters
    //     removeCharacter(Character $character): void qui retire $character du tableau $characters


    public function addChapter(Chapter $chapter): void
    {
        $this->chapters[] = $chapter;
    }


    public function removeChapter(Chapter $chapter): void
    {
        $key = array_search($chapter, $this->chapters, true);
        if ($key !== false) {
            unset($this->chapters[$key]);
        }
    }


    public function addCharacter(Character $character): void
    {
        $this->characters[] = $character;
    }

    public function removeCharacter(Character $character): void
    {
        $key = array_search($character, $this->characters, true);
        if ($key !== false) {
            unset($this->characters[$key]);
        }
    }
}
