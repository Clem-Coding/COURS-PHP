<?php
require_once __DIR__ . '/vendor/autoload.php';
// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();
require('connexion.php');






function routing(): string
{
    if (isset($_GET["route"]) && $_GET["route"] === "homepage") {
        $template = "homepage";
    } else if (isset($_GET["route"]) && $_GET["route"] === "connexion") {
        $template = "connexion";
    } else if (isset($_GET["route"]) && $_GET["route"] === "inscription") {
        $template = "inscription";
    } else {
        $template = "homepage";
    }

    return $template;
}

$template = routing();
var_dump($template);
require "layout.phtml";
