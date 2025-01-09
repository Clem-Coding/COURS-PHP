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
        <form method="POST" action="decrypt_password.php">
            <div class="mb-3">
                <label for="password" class="form-label">Votre mot de passe:</label>
                <input type="password" class="form-control" name="password" id="password" />
            </div>
            <div class="mb-3">
                <label for="hashPassword" class="form-label">Mot de passe crypté :</label>
                <input type="text" class="form-control" name="hashPassword" id="hashPassword" />
            </div>


            <button type="submit" class="btn btn-primary" name="validate">
                Envoyer
            </button>



</body>

</html>