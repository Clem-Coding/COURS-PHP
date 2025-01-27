<?php
// home.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    </head>

    <body>
        <!-- Navbar Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?route=home">User Management</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Lien vers la page d'ajout d'utilisateur -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?route=add">Ajouter un utilisateur</a>
                        </li>
                        <!-- Lien vers la page d'affichage des utilisateurs -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?route=list">Afficher les utilisateurs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenu principal de la page -->
        <div class="container mt-5">
            <h1>Bienvenue dans la gestion des utilisateurs</h1>
            <p class="lead">Utilisez la barre de navigation pour ajouter ou afficher les utilisateurs.</p>
        </div>


    </body>

</html>