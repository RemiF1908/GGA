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
$content = $_POST['content'];
echo $content;
$date  = date("Y-m-d");
$station = $_SESSION['abrv'];

$req = $bdd->prepare('INSERT INTO projets(Content, date, Station ) VALUES(:content, :date, :station)');
$req->execute(array(
    'content' => $content,
    'date' => $date,
    'station' => $station));
header('Location: /projets');
?>