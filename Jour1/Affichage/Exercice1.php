<!-- Exercice 1 : affichage de variables
Faites en sorte d’afficher le contenu de $title dans la balise <h1>. -->



<?php
$title = "Le titre de ma page";
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
</head>

<body>
    <h1>
        <?= $title ?>
    </h1>
</body>

</html>