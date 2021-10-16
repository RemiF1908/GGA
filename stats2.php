<?php include("./inc/blocage.php");
include("./php/stats_fonction.php");
session_start();
$jours = date('j');
$moisc = date('n');
$mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$stationsdeg = array("bregars", "alpeblanche", "capleit", "valrige", "cevert", "federia", "hautacam", "bourgbahnen");
//on cherche à savoir si  on est le premier du mois
if($jours==1){
    $mois=$mois[$moisc-2];
}
else{
    $mois=$mois[$moisc-1];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("./inc/head.php"); ?>
    <title>Les stats du GGA !</title>
    <link rel="stylesheet" type="text/css" href='./style/stats.css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Jours');
            data.addColumn('number', 'Brégars');
            data.addColumn('number', 'Alpe blanche');
            data.addColumn('number', 'Capleit');
            data.addColumn('number', 'Valrige');
            data.addColumn('number', 'Cevert');
            data.addColumn('number', 'Federia');
            data.addColumn('number', 'Hautacam');
            data.addColumn('number', 'Bourgbahnen');

            data.addRows([
                <?php
                $jsonliste=[];
                function day($entry){
                    if ($entry[1]=='-'){
                        $day=$entry[0];
                    }
                    else{
                        $day=$entry[0].$entry[1];
                    }
                    return $day;
                }
                $parsed_json=array();
                $json=array();
                if ($handle = opendir('./compta/bregars/'.$mois.'/')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            foreach($stationsdeg as $station){
                                $json[]=file_get_contents('./compta/'.$station.'/'.$mois.'/'.$entry);
                                $parsed_json[]=json_decode(end($json));
                            }


                            $req='['.day($entry).','
                                .$parsed_json[0]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[1]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[2]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[3]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[4]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[5]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[6]->{'TOTAL'}[1]->{'Débit'}.','
                                .$parsed_json[7]->{'TOTAL'}[1]->{'Débit'}.
                                '],';
                            echo $req;


                            $parsed_json=array();
                            $json=array();
                        }
                    }
                    closedir($handle);
                }
                ?>


            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: ''
                },
                width: 900,
                height: 500
            };

            var chart = new google.charts.Line(document.getElementById('linechart_material'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }



    </script>
</head>

<?php include("./inc/header.php"); ?>

<main>
    <h1>Les statistiques du GGA !</h1>
    <div id="linechart_material"></div>
</main>
</html>
