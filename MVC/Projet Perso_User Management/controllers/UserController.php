<?php



class UserController
{
    private UserManager $userManager;

    public function __construct()
    {
        // Instanciation du UserManager
        $this->userManager = new UserManager();
    }

    public function addUser()
    {
        // Vérification si c'est bien une requête POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Récupération des données du formulaire
            $name = $_POST['name'];
            $email = $_POST['email'];

            // Création de l'objet User
            $user = new User($name, $email);

            // Appel de la méthode addUser() via l'instance de UserManager
            $this->userManager->addUser($user);

            // Afficher un message de succès ou une notification
            echo "Utilisateur ajouté avec succès !";

            // Redirection vers la liste des utilisateurs après l'ajout
            header('Location: index.php?route=list');
            exit();
        }
    }

    public function showUsers(): void
    {
        // Récupère tous les utilisateurs via le Manager
        $users = $this->userManager->getAllUsers();

        // Inclut la vue avec les utilisateurs
        require "views/show-users.php";
    }
}
