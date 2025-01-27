

<?php



require_once "AbstractManager.php";

class UserManager extends AbstractManager
{

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }



    public function create(User $user): void
    {
        $query = $this->db->prepare('INSERT INTO users (email, first_name, last_name) VALUES(:email, :first_name, :last_name)');
        $parameters = [

            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ];

        $query->execute($parameters);

        // Mise à jour l'ID de l'utilisateur avec le dernier ID inséré
        $user->setId($this->db->lastInsertId());
    }
}
