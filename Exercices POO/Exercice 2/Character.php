<?php

class Character
{

    public function __construct(private int $id, private string $firstName = "Jane", private string $lastName = "Joe") {}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName(): string
    {

        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
