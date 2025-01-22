<?php



## Étape 3 : Créer la classe UserManager

// Créez un dossier `managers` et créez-y un fichier `UserManager.php`.

// Vous allez y définir une classe `UserManager`.

// Votre `UserManager` a 2 attributs private :

// - `users` qui est un tableau, sa valeur par défaut est un tableau vide
// - `db` qui est une instance la classe PDO

// Le constructeur de la classe `UserManager` ne prend pas d'argument mais il initialise son attribut db avec les informations de connexion à votre base de données.

// La classe `UserManager` a un getter et un setter pour l'attribut `users`.

// La classe `UserManager` a 3 méthodes public :

// - `loadUsers` qui ne prend pas d'arguments et ne retourne rien
// - `saveUser` qui prend un `User` en argument et ne retourne rien
// - `deleteUser` qui prend un `User` en argument et ne retourne rien

// Pour l'instant, ne codez pas le comportement de ces méthodes.


class UserManager
{
    private array $users;
    private $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $dbname = "clementineblondeau_userbase_poo";
        $user = "clementineblondeau";
        $password = "ff814d01b5e09e899033a7d";

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        if ($this->db) {
        } else {
            echo 'La connexion à la base de données a échoué.';
        }
    }


    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers($users)
    {
        $this->users = $users;
    }

    public function loadUsers()
    {
        // Exécute la requête pour récupérer tous les utilisateurs
        $query = $this->db->query('SELECT * FROM users');

        // Récupère toutes les lignes sous forme de tableau associatif
        $usersFromDb = $query->fetchAll(PDO::FETCH_ASSOC);

        // Initialise un tableau vide pour stocker les objets User
        $users = [];

        
           
           
           ->setId($row['id']);
           
       
        }

        // Remplace le tableau existant d'utilisateurs par celui que l'on vient de créer
        $this->setUsers($users);
    }
    public function saveUsers() {}
    public function deleteUsers() {}
}

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
