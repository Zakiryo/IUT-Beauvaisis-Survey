<?php

// Connexion à la base de données
$host = "hostname";
$username = "root";
$password = "root";
$dbname = "dbname";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données depuis la table food_conso
$query = "SELECT nom, nb_conso  FROM food_conso ORDER BY nb_conso DESC LIMIT 20";
$result = mysqli_query($conn, $query);

// Vérification de la récupération des données
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Stockage des données dans un tableau
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

// Affichage du diagramme en barres
echo "<html>
<head>
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Food', 'Nombre de Consommation'],";

foreach ($data as $row) {
    echo "['" . $row['nom'] . "', " . $row['nb_conso'] . "],";
}

echo "]);

    var options = {
        chart: {
            title: 'Top 20 Foods by Consumption',
            subtitle: 'Based on data from food_conso table',
        }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
</head>
<body>
<div id='columnchart_material' style='width: 800px; height: 500px;'></div>
</body>
</html>";

?>

<!-- effectué un trigger sur tous les aliments de: Administré.e	Nom	Prénom	Naissance	Adresse	Code Postal	Ville	Tel	Aliment1	Aliment2	Aliment3	Aliment4	Aliment5	Aliment6	Aliment7	Aliment8	Aliment9	Aliment10 -->
