
<?php
session_start();
   try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}  


$Altitude_haut=$_POST['Altitude-haut'];
$Altitude_bas=$_POST['Altitude-bas'];
$Longueur_debit=$_POST['Longueur-debit'];
$Largeur=$_POST['Largeur'];
$ID=$_POST['ID'];


$req = $bdd->prepare('UPDATE piste_rm SET Altitude_haut = :Altitude_haut, Altitude_bas = :Altitude_bas, Longueur_debit = :Longueur_debit, Largeur = :Largeur   WHERE ID = :ID');
$req->execute(array(
	'Altitude_haut' => $Altitude_haut,
	'Altitude_bas' => $Altitude_bas,
	'Longueur_debit' => $Longueur_debit,
	'Largeur' => $Largeur,
	'ID' => $ID));
	echo 'marche';

$header = 'Location: /interface3.php#'.$_SESSION['abrv'];
echo $_SESSION['abrv'];

header($header);

?>