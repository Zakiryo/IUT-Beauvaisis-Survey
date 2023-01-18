<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=beauvaisis_survey', 'root', 'root');
} catch (Exception $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
