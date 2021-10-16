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
$pseudo=$_POST['pseudo'];
$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$mail=$_POST['email'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];






// Insertion
$req = $bdd->prepare('INSERT INTO membre(pseudo, mdp, email, permission, prenom, nom) VALUES(:pseudo, :mdp, :email, :permission, :prenom, :nom)');
$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
    'pseudo' => $pseudo,
    'mdp' => $pass_hache,
    'permission' => 3, 
    'email' => $mail));	
//header('Location: /index');



	

    ?>
