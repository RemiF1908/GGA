<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/style/interface.css">
    <?php include('./inc/head.php') ?>
</head>
<body>
<?php include('./inc/header.php') ?>
<main>
<form method="post" action="./php/alti-test">
    <table class="table-piste">
        <tr><th colspan="18">Pistes</th></tr>
        <tr><td></td><td>Altitude Haut</td><td>Altitude Bas</td><td>Longueur</td><td>Largeur</td></tr>
<?php
try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$station = $bdd->query('SELECT station, station_abrv FROM membre WHERE station_abrv = \'GHF\' ');

while ($station_abrv = $station->fetch()){


    $station_nom = $station_abrv['station_abrv'];
    $pistes = $bdd->prepare('SELECT * FROM piste_rm WHERE station = \'GHF\' AND infra =\'piste\'ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
    $pistes->execute(array());
    while ($piste = $pistes->fetch()){
        $id= str_replace(' ', '', 'altitude-haut-'.$piste['nom']);
        echo '<tr class =\'clair\' ><td>'.$piste['nom'].'</td><td><input type="number" id="'.$id.'" name="altitude-haut-'.$piste['nom'].'" value="'.$piste['Altitude_haut'].'"></td>';
        $id= str_replace(' ', '', 'altitude-bas-'.$piste['nom']);
        echo '<td><input class="debit" type="number" id="'.$id.'" name="altitude-bas-'.$piste['nom'].'" value="'.$piste['Altitude_bas'].'"></td>';
        $id= str_replace(' ', '', 'longueur-'.$piste['nom']);
        echo '<td><input type="number" id="'.$id.'" name="longueur-'.$piste['nom'].'" value="'.$piste['Largeur'].'"></td>';
        $id= str_replace(' ', '', 'largeur-'.$piste['nom']);
        echo '<td><input type="number" id="'.$id.'" name="largeur-'.$piste['nom'].'" value="'.$piste['Longueur_debit'].'"></td>';
    }

}

?>

    </table>
    <input class = \'ouverture-piste\' type="submit">
</form>
</main>
</body>
</html>