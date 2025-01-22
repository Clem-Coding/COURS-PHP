<?php

// Côté Post
// Dans votre classe Post vous allez ajouter un attribut private categories qui est un tableau. 
// Par défaut, c'est un tableau vide. Ajoutez un getter et un setter pour cet attribut.
require_once "Users.php";

class Post
{
    private ?int $id = null;
    private array $categories = [];

    public function __construct(private string $title, private string $excerpt, private string $content, private User $author, private DateTime $createdAt) {}


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }



    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): void
    {
        $this->$excerpt = $excerpt;
    }
    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->$content = $content;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->$author = $author;
    }


    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }


    // // Vous allez également ajouter deux méthodes public à votre classe Post :


    // addCategory qui prend une Category en paramètres et ne retourne rien. Elle ajoute la catégorie en paramètres à la liste des catégories 
    // si elle n'y est pas déjà.

    public function addCategory(Category $category): void
    {

        $alreadyExists = false;

        foreach ($this->categories as $existingCategory) {
            if ($existingCategory === $category) {
                $alreadyExists = true;
                break;
            }
        }

        if (!$alreadyExists) {
            $this->categories[] = $category;
        }
    }




    // removeCategory qui prend une Category en paramètres et ne retourne rien. Elle retire la catégorie en paramètres de la liste des catégories.



    public function removeCategory(Category $category): void
    {

        foreach ($this->categories as $key => $existingCategory) {

            if ($existingCategory === $category) {

                unset($this->categories[$key]);
            }
        }
    }
}
