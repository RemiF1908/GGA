<?php
try {
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$rms = $bdd->prepare('SELECT * FROM piste_rm WHERE station=\'BGS\' AND infra =\'rm\'ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
$rms->execute(array());
while ($rm = $rms->fetch()) {

    $req = $bdd->prepare('UPDATE piste_rm SET Largeur = :Largeur WHERE nom = :nom');
    $req->execute(array(
        'Largeur' => 0,
        'nom' => $nom));

}


?>