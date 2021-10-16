<?php //include("./inc/blocage.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Grand Groupe Alpin</title>
    <link rel="stylesheet" href=".\style\style.css">
    <link href="logo-gga.png" rel="icon" type="image/png"/>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all and (min-width: 100px) and (max-width: 1000px)" href=".\style\500px.css"/>
    <link rel="stylesheet" href=".\style\connexion.css"/>
</head>


<body>

<?php include("./inc/header.php"); ?>

<main>


    <form action="/php/inscription" method="post">
        <p>
            <label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo"/><br/>
            <label for="message">Mot de passe :</label> <input type="password" name="mdp" id="mdp"/><br/>
            <label for="pseudo">Email :</label> <input type="text" name="email" id="email"/><br/>
            <label for="pseudo">Identifiant GGA :</label> <input type="text" name="Identifiant" id="Identifiant"/><br/>

            <input type="submit" value="Envoyer"/>

            <?php $pass_hache = password_hash("Remi1908", PASSWORD_DEFAULT);
            echo $pass_hache; ?>
        </p>
    </form>
    </form>

</main>

<footer>
    <p>Contact : <a href='mailto:gga.gski2020@gmail.com'>gga.gski2020@gmail.com</a> <br>Cette station est purement
        fictive et appartient au jeu <a href='https://g-ski.com/'>G-ski</a>, nous ne pouvons tenus être responsables de
        tout problème.</p>

</footer>
</body>
</html>
