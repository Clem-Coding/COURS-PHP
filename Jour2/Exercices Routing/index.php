<?php



if (isset($_GET["route"])) {
    $route = $_GET["route"];
}


function routing($route): string

{

    if ($route === "about") {
        return "about";
    } else if ($route === "contact") {
        return "contact";
    } else {
        return "homepage";
    }
}






$template = routing($route);
require "templates/layout.phtml";
