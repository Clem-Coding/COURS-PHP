<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercice sur les sessions</title>
</head>

<body>
    <div class="container mt-4">
        <form method="POST" action="nickname.php">
            <div class="mb-3">
                <label for="pseudo" class="form-label">Choisissez votre peusdo:</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" />
            </div>


            <button type="submit" class="btn btn-primary" name="validate">
                Envoyer
            </button>
            <a href="logout.php">Déconnexion</a>


</body>

</html>