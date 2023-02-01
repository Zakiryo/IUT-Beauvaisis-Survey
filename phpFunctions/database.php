<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=beauvaisis_survey', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
