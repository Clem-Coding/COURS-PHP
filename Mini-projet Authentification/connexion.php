<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "clementineblondeau_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "clementineblondeau";
$password = "ff814d01b5e09e899033a7de255dd2a4";

$db = new PDO(
    $connexionString,
    $user,
    $password
);


try {
    $pdo = $db;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
