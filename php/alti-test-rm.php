<?php

session_start();


try {
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$rms = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'rm\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
$rms->execute(array('station' => $_POST['station']));
while ($rm = $rms->fetch()) {


    $altitude_haut_current_rm = str_replace(' ', '', 'altitude-haut-' . $rm['nom']);
    $altitude_bas_current_rm = str_replace(' ', '', 'altitude-bas-' . $rm['nom']);
    $longueur_current_rm = str_replace(' ', '', 'longueur-' . $rm['nom']);
    $debit_current_rm = str_replace(' ', '', 'debit-' . $rm['nom']);

    $Altitude_haut = $_POST[$altitude_haut_current_rm];
    $Altitude_bas = $_POST[$altitude_bas_current_rm];
    $Longueur_debit = $_POST[$longueur_current_rm];
    $Largeur = $_POST[$debit_current_rm];
    echo $Altitude_haut;
    $nom = $rm['nom'];
    echo $rm['nom'].'<br>';
    $req = $bdd->prepare('UPDATE piste_rm SET Altitude_haut = :Altitude_haut, Altitude_bas = :Altitude_bas, Longueur_debit = :Longueur_debit, Largeur = :Largeur WHERE station =:station AND infra = :infra AND nom = :nom');
    $req->execute(array(
        'Altitude_haut' => $Altitude_haut,
        'Altitude_bas' => $Altitude_bas,
        'Longueur_debit' => $Longueur_debit,
        'Largeur' => $Largeur,
        'nom' => $nom,
        'station' => $_POST['station'],
        'infra' => 'rm'));
    echo $nom;


}
header('Location: /interface3.php');
?>