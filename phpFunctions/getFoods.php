<?php
require_once('database.php');
try {
    $check = $db->prepare('SELECT alim_code, alim_nom_fr, alim_ssgrp_nom_fr FROM foods');
    $check->execute();
    $data = $check->fetchAll();
    print_r(json_encode($data));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
