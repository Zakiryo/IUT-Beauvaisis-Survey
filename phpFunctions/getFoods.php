<?php
require_once('database.php');
try {
    $check = $db->prepare('SELECT alim_nom_fr FROM foods');
    $check->execute();
    $data = $check->fetchAll();
    print json_encode($data);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
