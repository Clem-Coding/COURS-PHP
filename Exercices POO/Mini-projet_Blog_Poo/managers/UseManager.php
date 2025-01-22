<?php


// La classe UserManager hérite de la classe AbstractManager. Elle n'a pas d'attribut et son constructeur appelle simplement le constructeur de sa classe mère.

// Elle a par contre 5 méthodes public :

// #### findAll

// La méthode findAll ne prend pas de paramètre et retourne un array.

// Elle va interroger la base de données et retourner un tableau d'instances de classe User correspondants aux utilisateurs en base de données.

// #### findOne

// La méthode findOne prend un int $id en paramètres et retourne un User ou null.

// Elle va interroger la base de données et retourner un instances de classe User correspondant à l'utilisateur en base de données qui a l'id passé en paramètres. 
//Si il n'eiste pas elle retourne null.

// #### create

// La méthode create prend un User en paramètres et ne retourne rien. Elle va créer un Usercorrespondant à celui passé en paramètres dans la base de données.

// #### update

// La méthode update prend un User en paramètres et ne retourne rien. Elle va modifier le User correspondant à celui passé en paramètres dans la base de données.

// #### delete

// La méthode delete prend un int $id en paramètres et ne retourne rien. Elle va supprimer le User en base de données qui a l'id passé en paramètres. 

require "AbstractManager.php";

class UserManager extends AbstractManager
{

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }

    public function findAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM users");
        $stmt->execute();
        $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $users = [];
        foreach ($usersData as $userData) {
            $users[] = new User(
                $userData['username'],
                $userData['email'],
                $userData['password'],
                $userData['role'],
                new DateTime($userData['created_at'])
            );
        }

        return $users;
    }


    public function findOne(int $id): ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($userData) {
            return new User(
                $userData['username'],
                $userData['email'],
                $userData['password'],
                $userData['role'],
                new DateTime($userData['created_at'])
            );
        }

        return null;
    }




    #### create

    // La méthode create prend un User en paramètres et ne retourne rien. Elle va créer un User correspondant à celui passé en paramètres dans la base de données.


    public function create(User $user): void
    {
        $stmt = $this->db->prepare('INSERT INTO users (username, email, password, role,created_At) VALUES(:username, :email,:password, :role,:created_At )');
        $parameters = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'created_At' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
        ];

        $stmt->execute($parameters);
    }


    // #### update

    // La méthode update prend un User en paramètres et ne retourne rien. Elle va modifier le User correspondant à celui passé en paramètres dans la base de données.


    public function update(User $user): void
    {
        $stmt = $this->db->prepare('UPDATE users SET username =:username, email =:email, password= :password, role =:role, created_at = :created_at WHERE id = :id');
        $parameters = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'created_at' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
            'id' => $user->getId(),
        ];

        $stmt->execute($parameters);
    }



    public function delete(int $id): void
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $parameters = [
            'id' => $id
        ];

        $stmt->execute($parameters);
    }
}
