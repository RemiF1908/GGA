<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include("./inc/head.php"); ?>


</head>


<body>


<main>
    <?php

    try {
        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'HTC\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo 'Hautacam', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'LAB\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Alpe Blanche', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'BGS\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Brégars', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'VLG\' ');
    $reponse->execute(array('Valrige' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Valrige', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'CVR\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Les Ceverts', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'FDR\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Federia', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'PDE\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Super Besse', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'SPB\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Pra de l\'eau', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'BBG\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>Bourbaghen', $longueur / 1000, 'km';
    $reponse->closeCursor();
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' ');
    $reponse->execute(array('station' => $station_nom));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    echo '<br>GGA', $longueur / 1000, 'km';
    $reponse->closeCursor();
    ?><br>
    <a onclick="inscription()">Inscription</a><br>
    <?php
    function getIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    echo 'L adresse IP de l utilisateur est : ' . getIp();

    ?>
    <h1>Meteo17</h1>
    <h2>Rm</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'rm\' AND station=\'HTC\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['type'] . '</td>';
        }
        ?>
    </table>
    <h2>Pistes</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'HTC\' ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Altitude_haut'] . '</td><td>' . $donnees['Altitude_bas'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['Longueur_debit'] . '</td>';
        }
        ?>
    </table>
    <h1>Steve</h1>
    <h2>Rm</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'rm\' AND station=\'SPB\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['type'] . '</td>';
        }
        ?>
    </table>
    <h2>Pistes</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'SPB\' ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Altitude_haut'] . '</td><td>' . $donnees['Altitude_bas'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['Longueur_debit'] . '</td>';
        }
        ?>
    </table>
    <h1> Jack</h1>
    <h2>Rm</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'rm\' AND station=\'BBG\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['type'] . '</td>';
        }
        ?>
    </table>
    <h2>Pistes</h2>
    <table>
        <?php
        $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' AND station=\'BBG\' ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom');
        $reponse->execute(array('station' => $station_nom));
        $longueur = 0;
        while ($donnees = $reponse->fetch()) {
            echo '<tr><td>' . $donnees['nom'] . '</td><td>' . $donnees['Altitude_haut'] . '</td><td>' . $donnees['Altitude_bas'] . '</td><td>' . $donnees['Largeur'] . '</td><td>' . $donnees['Longueur_debit'] . '</td>';
        }
        ?>
        <?php $pass_hache = password_hash("Ketchup78", PASSWORD_DEFAULT);
        echo $pass_hache; ?>
    </table>
</main>


</body>
</html>

