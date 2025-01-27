<?php


require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname =  $_ENV['DB_NAME'];
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user =  $_ENV['DB_USERNAME'];
$password =  $_ENV['DB_PASSWORD'];

$db = new PDO(
    $connexionString,
    $user,
    $password
);


try {
    $pdo = $db;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la BDD réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion à la BDD : " . $e->getMessage();
}
