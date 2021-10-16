<!DOCTYPE html>
<html>

<head>
    <?php include("./inc/head.php"); ?>
    <title>Le classement !</title>
</head>

<?php include("./inc/header.php"); ?>
<h1>Le classement : </h1>
<p><a href="historique.php">Consulter l'historique</a></p>
<table>

<?php
$gain = [];
$jours = date('j');
//$jours = $jours - 1;
$moisc = date('n');
$annee = date('Y');
$mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$nbjmois = array("31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31");

$stationsdeg = array("bregars", "alpeblanche", "capleit", "valrige", "cevert", "federia", "hautacam", "bourgbahnen");
$stations = array("Brégars", "Alpe Blanche", "Capleit", "Valrige", "Cevert", "Federia", "Hautacam", "Bourgbahnen");
$logos = array("logo-bregars-2.svg", "logolab2.svg", "logo-capleit.png", "logo-valrige.svg", "logo-les-ceverts.png", "Federia.png", "logo-hautacam.png", "logo-bourgbahnen.jpg");
if(file_exists('./compta/'.'bregars'.'/'.$mois[$moisc - 1] . '/' . $jours . '-' . $moisc . '-' . $annee . '.json')==false){
    $jours = $jours - 1;
}
$i=0;
foreach ($stationsdeg as $station) {
    if($jours==0){
        $json = file_get_contents('http://gga.alwaysdata.net/compta/' . $station . '/' . $mois[$moisc - 2] . '/' . $nbjmois[$moisc-2] . '-' . ($moisc-1) . '-' . $annee . '.json');

    }
    else{
        $json = file_get_contents('http://gga.alwaysdata.net/compta/' . $station . '/' . $mois[$moisc - 1] . '/' . $jours . '-' . $moisc . '-' . $annee . '.json');

    }
    $parsed_json = json_decode($json);
    $gain[] = array($parsed_json->{'TOTAL'}[1]->{'Débit'}, $station, $stations[$i], $logos[$i]);
    $i++;

}
rsort($gain);
$i=1;
foreach ($gain as $station) {
    echo '<tr>';
    echo "<td><p class='numero'>".$i."</p></td>";
    echo "<td><img src='/logos/".$station[3]."'></td>";
    echo "<td>".$station[2]."</td>";
    echo "<td>".number_format($station[0], 0, ' ', ' ')."€</td>";
    if($jours!=0){
        echo "<td>" . number_format($station[0] / $jours * $nbjmois[$moisc - 1], 0, ' ', ' ') . "€</td>";
    }
    echo "</tr>";
    $i++;
}
?>


</table>
<style>
    img{
        width: 100px;
        height: auto;
    }
    td{
        width: 100px;
        height: 100px;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: "Roboto Medium";
        font-size: 20px;
        text-align: center;
    }
    table{
        border-collapse: collapse;
        margin: auto;
        width: 40%;
        margin-bottom: 5%;
    }
    .numero{
        text-align: center;
        font-size: 50px;
    }
    p{
        font-family: "Roboto";
        font-size: 20px;
        text-align: center;
    }
</style>

<?php
$json = file_get_contents('http://88.139.229.109/caca.json');
$parsed_json = json_decode($json);
$gain = $parsed_json->{'18-7-2021'}->{'bas'}->{'vent'};
echo $gain;
?>

<?php include("./inc/footer.php"); ?>
</html>