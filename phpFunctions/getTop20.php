<?php
require_once('database.php');
try {
    $check = $db->prepare('SELECT alim_nom_fr, alim_ssgrp_nom_fr, nb_selection FROM foods ORDER BY nb_selection DESC LIMIT 20');
    $check->execute();
    $data = $check->fetchAll();
    print_r(json_encode($data));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
