<?php
require_once __DIR__ . '/../vendor/autoload.php';  // Inclure les dépendances de Composer

use Dotenv\Dotenv;  // Importation correcte de la classe Dotenv

// Charger les variables d'environnement à partir de la racine du projet
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');  // Appel de createImmutable correctement sans répéter 'Dotenv'

// Charger le fichier .env
$dotenv->load();

// Vérifier si la clé secrète est bien chargée
$secretKey = getenv('STRIPE_SECRET_KEY'); 

if ($secretKey === false) {
    echo json_encode(['error' => 'La clé secrète Stripe est introuvable']);
} else {
    echo json_encode(['secretKey' => $secretKey]);
}
