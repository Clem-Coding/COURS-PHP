<?php

class Category
{
    private ?int $id = null;

    private array $posts = [];



    public function __construct(private string $title, private string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }


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


    public function getDescription(): string
    {
        return $this->description;
    }

    public function setdescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function setPosts(array $posts): void
    {
        $this->posts = $posts;
    }



    public function addPost(Post $post): void
    {

        $alreadyExists = false;

        foreach ($this->posts as $existingPost) {
            if ($existingPost === $post) {
                $alreadyExists = true;
                break;
            }
        }

        if (!$alreadyExists) {
            $this->posts[] = $post;
        }
    }




    // removeCategory qui prend une Category en paramètres et ne retourne rien. Elle retire la catégorie en paramètres de la liste des catégories.



    public function removePost(Post $post): void
    {

        foreach ($this->posts as $key => $existingPost) {

            if ($existingPost === $post) {

                unset($this->posts[$key]);
            }
        }
    }
}
