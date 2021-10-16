<?php
session_start();
echo $_POST['altitude-bas-test1'];
echo 'l';
try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


$pistes = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'piste\' ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
$pistes->execute(array('station'=>$_POST['station']));
while ($piste = $pistes->fetch()){


    $altitude_haut_current_piste=str_replace(' ', '', 'altitude-haut-'.$piste['nom']);
    $altitude_bas_current_piste=str_replace(' ', '', 'altitude-bas-'.$piste['nom']);
    $longueur_current_piste=str_replace(' ', '', 'longueur-'.$piste['nom']);
    $largeur_current_piste=str_replace(' ', '', 'largeur-'.$piste['nom']);

    echo $_POST[$altitude_haut_current_piste];
    $Altitude_haut = $_POST[$altitude_haut_current_piste];
    $Altitude_bas = $_POST[$altitude_bas_current_piste];
    $Largeur = $_POST[$longueur_current_piste];
    $Longueur_debit = $_POST[$largeur_current_piste];

    $nom=$piste['nom'];
    $req = $bdd->prepare('UPDATE piste_rm SET Altitude_haut = :Altitude_haut, Altitude_bas = :Altitude_bas, Longueur_debit = :Longueur_debit, Largeur = :Largeur WHERE station = :station AND infra = :infra AND nom = :nom');
    $req->execute(array(
        'Altitude_haut' => $Altitude_haut,
        'Altitude_bas' => $Altitude_bas,
        'Longueur_debit' => $Longueur_debit,
        'Largeur' => $Largeur,
        'station' => $_POST['station'],
        'nom' => $nom,
        'infra' => 'piste'));
    echo $nom;


}
header('Location: /interface3.php');
?>