<?php


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
