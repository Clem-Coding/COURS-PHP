<?php


abstract class AbstractManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}
