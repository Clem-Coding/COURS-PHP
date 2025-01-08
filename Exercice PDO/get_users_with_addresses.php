<?php
require('connexion.php');


if (isset($_GET['id'])) {

    $query = $db->prepare('SELECT  users.*, address.* FROM users JOIN address ON address = address.id');
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
}
