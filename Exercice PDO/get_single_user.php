<?php


require('connexion.php');


if (isset($_GET['id'])) {

    $id_user = $_GET['id'];

    $query = $db->prepare('SELECT * FROM users WHERE id = ?');


    $query->execute([$id_user]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($user);
}
