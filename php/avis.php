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
$titre=$_POST['titre'];
$content = $_POST['content'];
$id_hotel=$_POST['id_hotel'];
$id_user=$_SESSION['ID'];







// Insertion
$req = $bdd->prepare('INSERT INTO Avis(Titre, Content, Id_user, Id_hotel) VALUES(:Titre, :Content, :Id_user, :Id_hotel)');
$req->execute(array(
	'Titre' => $titre,
	'Content' => $content,
    'Id_user' => $id_user,
    'Id_hotel' => $id_hotel));


/*echo $titre;
echo $content;
echo $id_hotel;
echo $id_user;*/
header('Location: /reservation');





    ?>
