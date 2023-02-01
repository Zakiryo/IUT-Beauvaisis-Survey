<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <script src="scriptSurvey.js" defer></script>
    <title>Sondage alimentaire - Beauvaisis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="VirtualSelect/virtual-select.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="VirtualSelect/virtual-select.min.js"></script>
    <script src="scriptSurvey.js"></script>
</head>

<body style="width: 1500px">
    <div class="header">
        <a href="index.php"><img src="img/logo.png" width="235" height="120" alt=""></a>
        <h1>Sondage alimentaire du Beauvaisis</h1>
        <button>Plus d'informations sur le sondage</button>
    </div>
    <hr>
    <div id="form-survey" class="content">
        <form action="phpFunctions/submitSurvey.php" method="post">
            <h2>Merci de remplir correctement tous les champs ci-dessous.</h2>
            <br>
            <div class="row mt-2">
                <div class="col-md-6"><label class="labels">Votre prénom : </label><input type="text" maxlength=90 name="firstName" class="form-control" placeholder="Prénom" value=""></div>
                <div class="col-md-6"><label class="labels">Votre nom de famille : </label><input type="text" maxlength=90 name="lastName" class="form-control" value="" placeholder="Nom de famille"></div>
            </div>
            <br>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Votre date de naissance : </label>
                <input type="date" name="birthDate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Votre adresse :</label>
                <input class="form-control" maxlength=90 name="address" type="text" placeholder="Ligne d'adresse">
            </div>
            <div class="row mt-2">
                <div class="col-md-6"><label class="labels">Votre ville : </label><input type="text" maxlength=90 name="city" class="form-control" placeholder="Ville" value=""></div>
                <div class="col-md-6"><label class="labels">Votre code postal : </label><input type="number" maxlength="5" min="10000" max="99999" name="postalCode" class="form-control" value="" placeholder="Code postal"></div>
            </div>
            <br>
            <div class="mb-3">
                <label for="phone" class="form-label">Votre numéro de téléphone : </label>
                <input type="tel" id="phone" name="phone" class="form-control" />
            </div>
            <br>
            <div class="mb-3">
                <label for="selectFoods" class="form-label">Sélectionnez vos 10 aliments préférés : </label>
                <select id="multipleSelect" multiple name="foods" placeholder="Native Select" data-search="true" data-silent-initial-value-set="false">
                </select>
            </div>
            <button type="submit" id="submit">Soumettre vos résultats</button>
        </form>
        <button onclick="window.location.href='index.php';">Retour au menu</button>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <p>Agglomération du Beauvaisis | Beauvaisis.fr &copy;2023</p>
        </div>
    </footer>
</body>

</html>