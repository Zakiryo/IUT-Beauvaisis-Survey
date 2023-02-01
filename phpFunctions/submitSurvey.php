<?php
require_once 'database.php';
if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['birthDate']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['postalCode']) && !empty($_POST['phone']) && !empty($_POST['foods'])) {
    $firstName = ucfirst(strtolower(htmlspecialchars($_POST['firstName'])));
    $lastName = strtoupper(htmlspecialchars($_POST['lastName']));
    $birthDate = htmlspecialchars($_POST['birthDate']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postalCode = htmlspecialchars($_POST['postalCode']);
    $phone = htmlspecialchars($_POST['phone']);
    $food = explode(",", $_POST['foods']);
    $insert = $db->prepare('INSERT INTO `survey` (`ID`, `Nom`, `Prenom`, `Naissance`, `Adresse`, `CodePostal`, `Ville`, `Tel`, `DateReponse`, `Aliment1`, `Aliment2`, `Aliment3`, `Aliment4`, `Aliment5`, `Aliment6`, `Aliment7`, `Aliment8`, `Aliment9`, `Aliment10`) VALUES (NULL, :firstname, :lastname, :birthdate, :address, :postalcode, :city, :phone, :answerdate, :alim1, :alim2, :alim3, :alim4, :alim5, :alim6, :alim7, :alim8, :alim9, :alim10)');
    $insert->execute(array(
        'firstname' => $firstName,
        'lastname' => $lastName,
        'birthdate' => $birthDate,
        'address' => $address,
        'postalcode' => $postalCode,
        'city' => $city,
        'phone' => $phone,
        'answerdate' => date('y-m-d'),
        'alim1' => $food[0],
        'alim2' => $food[1],
        'alim3' => $food[2],
        'alim4' => $food[3],
        'alim5' => $food[4],
        'alim6' => $food[5],
        'alim7' => $food[6],
        'alim8' => $food[7],
        'alim9' => $food[8],
        'alim10' => $food[9]
    ));
    header('Location:../index.php');
} else {
    header('Location: ../survey.php');
}
