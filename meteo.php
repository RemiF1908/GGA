<!DOCTYPE html>
<head>
    <?php include("./inc/head.php"); ?>
    <title>Météo</title>
</head>


<body>
<?php include("./inc/header.php"); ?>
    <h1>La météo</h1>

<?php
function day($entry){
    if ($entry[1]=='-'){
        $day=$entry[0];
    }
    else{
        $day=$entry[0].$entry[1];
    }
    return $day;
}
$json = file_get_contents('http://les7laux.ga/caca.json');
$parsed_json = json_decode($json);
echo '<table>';
echo '<tr><td>Jours</td><td>Bas Vent</td><td>Bas Temps</td><td>Haut Vent</td><td>haut Temps</td></tr>';
foreach ($parsed_json as $k=>$jss){
    echo '<tr>';
    echo '<td>'.$k.'</td>';
    echo '<td>'.$jss->{'bas'}->{'vent'}.'</td>';
    echo '<td>'.$jss->{'bas'}->{'temps'}.'</td>';
    echo '<td>'.$jss->{'haut'}->{'vent'}.'</td>';
    echo '<td>'.$jss->{'haut'}->{'temps'}.'</td>';
    echo '</tr>';

    

}

echo '</table>';


?>

<style>

    td{
        border: 1px solid black;
        border-collapse: collapse;
        font-family: "Roboto Medium";
        font-size: 20px;
    }
    tr{
        background-color: #c2bfc3;
    }
    tr:nth-child(odd){
        background-color: #918f92;
    }
    table{
        border-collapse: collapse;
        border-radius: 10px;
        margin: auto;
    }
</style>
