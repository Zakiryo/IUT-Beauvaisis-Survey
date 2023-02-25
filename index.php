<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Sondage alimentaire - Beauvaisis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-index.css">
    <link rel="icon" href="img/logo.png">
    <script src="scriptIndex.js"></script>
</head>

<body style="width: 1500px">
    <div class="header">
        <img src="img/logo.png" width="235" height="120" alt="">
        <h1>Sondage alimentaire du Beauvaisis</h1>
        <button>Plus d'informations sur le sondage</button>
    </div>
    <hr>
    <div class="content">
        <div class="intro">
            <p>L'agglomération du Beauvaisis organise chaque année un sondage à l'intention des habitants sur le sujet de l'alimentation.
                L'objectif est de récolter des informations concernant les aliments que consomment le plus, en moyenne, les habitants peuplant l'agglomération du Beauvaisis.
                Les résultats ne sont exploités qu'à des fins statistiques et votre participation compte beaucoup à l'élaboration de ces chiffres. N'hésitez donc pas et répondez
                dès à présent à notre sondage alimentaire ! Vous pourrez également en amont consulter les résultats.
            </p>
        </div>
        <div class="selectZone">
            <button class="surveyButton" style="background-color: rgba(17, 42, 126, 0.452);" onclick="window.location.href='survey.php';">Répondre au sondage</button>
            <button class="surveyButton" style="background-color: rgba(139, 6, 6, 0.452);" onclick="window.location.href='results.php';">Consulter les résultats</button>

        </div>
        <div class="imgSondage">
            <img src="img/bulle.png" style="width: 15%; height: 15%;">
            <p>Merci pour votre engagement !</p>
            <img src="img/sondage.png" style="width: 15%; height: 15%;">
        </div>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <p>Agglomération du Beauvaisis | Beauvaisis.fr &copy;2023</p>
        </div>
    </footer>
</body>

</html>