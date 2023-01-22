<?php
require_once('database.php');
try {
    $check = $db->prepare('SELECT * FROM foods');
    $check->execute();
    $data = $check->fetchAll();
    print_r(json_encode($data));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
