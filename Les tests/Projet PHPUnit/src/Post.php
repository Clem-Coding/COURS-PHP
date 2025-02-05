<?php

// class Post
// {
//     public function __construct(
//         private string $title,
//         private string $content,
//         private string $slug,
//         private bool $private = false
//     ) {
//         $this->setTitle($title);
//         $this->setContent($content);
//         $this->setSlug($slug);
//     }


//     public function getTitle(): string
//     {
//         return $this->title;
//     }

//     public function getContent(): string
//     {
//         return $this->content;
//     }

//     public function getSlug(): string
//     {
//         return $this->slug;
//     }

//     public function isPrivate(): bool
//     {
//         return $this->private;
//     }


//     public function setTitle(string $title): void
//     {
//         if (empty($title)) {
//             throw new InvalidArgumentException("Title cannot be empty.");
//         }
//         $this->title = $title;
//     }

//     public function setContent(string $content): void
//     {
//         if (empty($content)) {
//             throw new InvalidArgumentException("Content cannot be empty.");
//         }
//         $this->content = $content;
//     }


//     //Un slug d’URL est la partie de l’URL située après le dernier slash (barre oblique). 
//     //Par exemple, l’article que vous êtes en train de lire a une URL qui se présente de la manière suivante :
//     // https://www.fr.semrush.com/blog/qu-est-ce-qu-un-slug


//     public function setSlug(string $slug): void
//     {




//         if (empty($slug) || !preg_match('/^[a-zA-Z0-9-]+$/', $slug)) {
//             throw new InvalidArgumentException("Slug must be non-empty and contain only URL-safe characters.");
//         }
//         $this->slug = $slug;
//     }

//     public function setPrivate(bool $private): void
//     {
//         $this->private = $private;
//     }
// }



class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private string $slug,
        private bool $private = false
    ) {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setSlug($slug);
        $this->setPrivate($private);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function isPrivate(): bool
    {
        return $this->private;
    }

    // Setters

    public function setTitle(string $title): void
    {
        $this->validateTitle($title);
        $this->title = $title;
    }

    public function setContent(string $content): void
    {
        $this->validateContent($content);
        $this->content = $content;
    }

    public function setSlug(string $slug): void
    {
        $this->validateSlug($slug);
        $this->slug = $slug;
    }

    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    // Validation Methods

    private function validateTitle(string $title): void
    {
        if (empty($title)) {
            throw new InvalidArgumentException("Title cannot be empty.");
        }
    }

    private function validateContent(string $content): void
    {
        if (empty($content)) {
            throw new InvalidArgumentException("Content cannot be empty.");
        }
    }

    private function validateSlug(string $slug): void
    {



        //Regex /^[a-zA-Z0-9-]+$/ :

        // ^ : Début de la chaîne.
        // [a-zA-Z0-9-] : Accepte des lettres majuscules et minuscules, des chiffres (0-9), et des tirets (-).
        // + : Au moins un ou plusieurs caractères de l'ensemble défini.
        // $ : Fin de la chaîne

        if (empty($slug) || !preg_match('/^[a-zA-Z0-9-]+$/', $slug)) {
            throw new InvalidArgumentException("Slug must be non-empty and contain only URL-safe characters.");
        }
    }
}
