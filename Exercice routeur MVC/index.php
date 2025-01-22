<?php
// Point d'entrée de l'application qui run 


// require le fichier qui sera le point central de tous les require de l'application
require "config/autoload.php";


// instance le routeur et appelle la méthode hanfleRequest
$router = new Router();
$router->handleRequest($_GET);





// Comment ça se passe quand un utilisateur arrive sur le site ?

//Demande de l'utilisateur : L'utilisateur arrive sur le site, par exemple à l'adresse index.php?route=a-propos.

// Le index.php reçoit la requête : Le fichier index.php est exécuté et il inclut tous les fichiers nécessaires (routeur, les contrôleurs).

//Le Routeur analyse l'URL : Le Router prend la superglobale $_GET, regarde la valeur de route et détermine quelle méthode du contrôleur doit être appelée.

//Le Contrôleur exécute l'action : En fonction de la valeur de la route, le contrôleur (PageController) est appelé. Par exemple, si la route est a-propos, le contrôleur exécutera la méthode about().

//Le Contrôleur appelle la Vue : Dans chaque méthode du contrôleur, une variable $route est définie (par exemple, 'about') et la vue (layout.phtml) est appelée. La vue affiche le contenu de la page correspondante.

//Affichage de la page : La page demandée (par exemple, la page "À propos") est affichée à l'utilisateur.


// VERSION SYNTHETIQUE :

// index.php : Le point d'entrée qui initialise tout.
// Router.php : Gère la logique des routes et redirige vers le bon contrôleur.
// PageController.php : Contient les méthodes qui préparent le contenu pour chaque page (par exemple, home(), about(), notFound()).
// layout.phtml : Affiche la vue (le contenu HTML) en fonction de la route.