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
        <form method="POST" action="index.php">
            <select class="form-select" name="color" id="color" aria-label="Sélectionnez une couleur">
                <option selected>Sélectionnez une couleur</option>
                <option value="1">Noir</option>
                <option value="2">Rouge</option>
                <option value="3">Bleu</option>
            </select>


            <button type="submit" class="btn btn-primary" name="validate">
                Envoyer
            </button>


        </form>


</body>

</html>