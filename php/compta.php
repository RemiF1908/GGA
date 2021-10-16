<?php
$mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");

$station = $_POST['station'];
$moisj = $_POST['mois'];
$jours = $_POST['jours'];

echo'Location: /testttt.php?station='.$station.'&moisj='.$moisj.'&jours'.$jours;
header('Location: /testttt.php?station='.$station.'&moisj='.$moisj.'&jours='.$jours);
?>