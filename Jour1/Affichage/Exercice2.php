<!-- Exercice 2 : afficher avec une condition

Faites en sorte de créer une condition d’affichage :

    Si $connectedUser vaut false : affichez <a href="#">Connexion</a>
    Si $connectedUser vaut true : affichez <a href="#">Déconnexion</a> -->


<?php
$connectedUser = false;
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
</head>

<body>
    <header>
        <nav>

            <?php
            if (!$connectedUser) {
                echo '<a href="#">Connexion</a>';
            } else {
                echo '<a href="#">Déconnexion</a>';
            }
            ?>


        </nav>
    </header>
</body>

</html>