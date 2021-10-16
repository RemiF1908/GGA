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


$nom=$_POST['nom'];
$type=$_POST['type'];
$Etat=$_POST['Etat'];
$couleur=$_POST['couleur'];
$station=$_SESSION['abrv'];
$infra=$_POST['infra'];
$_SESSION['choix-type'] = $type;
$_SESSION['choix-infra'] = $infra;
$alt_haut=$_POST['haut'];
$alt_bas=$_POST['bas'];
$longueur=$_POST['Longueur'];
$largeur_debit=$_POST['Largeur/débit'];
// Insertion
$req = $bdd->prepare('INSERT INTO piste_rm(nom, type, Etat,  station, infra, Altitude_haut, Altitude_bas) VALUES(:nom, :type, :Etat,  :station, :infra, :alt_haut, :alt_bas)');
$req->execute(array(
	'nom' => $nom,
	'type' => $type,
	'Etat' => $Etat,
	'station' => $station,
	'infra' => $infra,
	'alt_haut' => $alt_haut,
	'alt_bas' => $alt_bas,));

if ($infra == 'rm') {
	$req = $bdd->prepare('UPDATE piste_rm SET Longueur_debit = :Longueur_debit, Largeur = :Largeur WHERE nom = :nom AND infra = \'rm\' ');
	$req->execute(array(
		'Longueur_debit' => $longueur,
		'Largeur' => $largeur_debit,
		'nom' => $nom));
}


else {

	$req = $bdd->prepare('UPDATE piste_rm SET Longueur_debit = :Longueur_debit, Largeur = :Largeur WHERE nom = :nom AND infra = \'piste\' ');
	$req->execute(array(
		'Longueur_debit' => $largeur_debit,
		'Largeur' => $longueur,
		'nom' => $nom));

}
header('Location: /add-piste.php');



?>

