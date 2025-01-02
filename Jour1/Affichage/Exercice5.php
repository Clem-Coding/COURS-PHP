<!-- Exercice 5 : afficher tableaux imbriqués 
 Faites en sortes d’afficher, pour chacune des matières, le nom de la matière et la liste des notes dans le <ul>.-->



<?php
$grades = [
    "french" => [12, 9, 13],
    "english" => [18, 12, 11],
    "maths" => [15, 11, 13]
];
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
</head>

<body>
    <h1>
        Liste des notes
    </h1>
    <ul>
        <?php
        foreach ($grades as $subject => $notes) {
            echo "<li>$subject : <ul>";
            foreach ($notes as $note) {
                echo "<li>$note</li>";
            }
            echo "</ul></li>";
        }
        ?>
    </ul>
</body>

</html>