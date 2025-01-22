<?php

// Chapter

// Notre classe Chapter aura les attributs private suivants :

//     string $title
//     string $content
//     ? Chapter $nextChapter

// Son constructeur reçoit ses 3 attributs et par défaut $nextChapter est null. La classe a des getters et setters public pour tous ses attributs.


class Chapter
{
    public function __construct(private string $title, private string $content, private ?Chapter $nextChapter = null) {}



    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }



    public function getNextChapter(): ?Chapter
    {
        return $this->nextChapter;
    }

    public function setNextChapter(?Chapter $nextChapter): void
    {

        $this->nextChapter = $nextChapter;
    }
}
