<!DOCTYPE html>
<head>
    <?php include("./inc/head.php"); ?>
    <title>Météo</title>
</head>


<body>
<?php include("./inc/header.php"); ?>
<h1>La compta</h1>

<?php
$station=htmlspecialchars($_GET['station']);
$moisj=htmlspecialchars($_GET['moisj']);
$jours=htmlspecialchars($_GET['jours']);
$mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");


//Location: /compta/'.$station.'/'.$mois[$moisj-1].'/'.$jours.'-'.$moisj.'-2021.json
$json = file_get_contents('http://gga.alwaysdata.net/compta/'.$station.'/'.$mois[$moisj-1].'/'.$jours.'-'.$moisj.'-2021.json');
$parsed_json = json_decode($json);
$json_hier = file_get_contents('http://gga.alwaysdata.net/compta/'.$station.'/'.$mois[$moisj-1].'/'.($jours).'-'.$moisj.'-2021.json');
$parsed_json_hier = json_decode($json_hier);
$entete=array('Dépenses Ressources Humaines', 'Achat carburant', 'Dépenses Domaine Skiable', 'Construction de locaux', 'Remboursements anticipés', 'Achat de matériel', 'Vente de matériel', 'CA transports', 'CA domaine skiable', 'CA hôtellerie', 'CA restaurants', 'CA parkings', 'Dépenses & revenus location', 'Revenus publicitaires', 'Maintenance des remontées mécaniques', 'Maintenance des dameuses', 'Concours & mini-jeu', 'CA domaine ski de fond', 'Prévention des avalanches', 'Dépense en Marketing', 'Subventions Conseil Général', 'Subventions de l\'Etat', 'TOTAL')
?>

<table>
    <tr>
        <td id="hide"></td>
        <td>Crédit</td>
        <td>Débit</td>
    </tr>

<?php
$i=0;
foreach ($parsed_json as $jss){
    echo '<tr>';
    echo '<td>'.$entete[$i].'</td>';
    echo '<td>'.number_format($jss[0]->{'Crédit'}, 0, ' ', ' ').'</td>';
    echo '<td>'.number_format($jss[1]->{'Débit'}, 0,' ', ' ').'</td>';
    echo '</tr>';
    $i++;
}
?>
</table>
<br>

<button  onclick="window.location.href ='graph'" id="retour"><-Retour</button>
<div class="gain">
    <div class="gain-inner">
        <p> CA Domaine skiable : <?php echo number_format(($parsed_json->{'CA domaine skiable'}[1]->{'Débit'})-($parsed_json_hier->{'CA domaine skiable'}[1]->{'Débit'}), 0,' ', ' ' ); ?> €</p>
        <p> CA transports : <?php echo number_format(($parsed_json->{'CA transports'}[1]->{'Débit'})-($parsed_json_hier->{'CA transports'}[1]->{'Débit'}), 0,' ', ' '); ?> €</p>
        <p> CA hôtellerie : <?php echo number_format(($parsed_json->{'CA hôtellerie'}[1]->{'Débit'})-($parsed_json_hier->{'CA hôtellerie'}[1]->{'Débit'}),  0,' ', ' '); ?> €</p>
        <p> CA restaurants : <?php echo number_format(($parsed_json->{'CA restaurants'}[1]->{'Débit'})-($parsed_json_hier->{'CA restaurants'}[1]->{'Débit'}),  0,' ', ' '); ?> €</p>
        <p> CA parkings : <?php echo number_format(($parsed_json->{'CA parkings'}[1]->{'Débit'})-($parsed_json_hier->{'CA parkings'}[1]->{'Débit'}),  0,' ', ' '); ?> €</p>
        <p> CA domaine ski de fond : <?php echo number_format(($parsed_json->{'CA domaine ski de fond'}[1]->{'Débit'})-($parsed_json_hier->{'CA domaine ski de fond'}[1]->{'Débit'}),  0,' ', ' '); ?> €</p>
    </div>
</div>
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
        width: 40%;
    }
    #hide{
        border: none;
        background-color: white;
    }
    p{
        font-family: "Roboto Medium";
    }

    #retour{

        font-size: 25px;
        text-align: center;
        display: flex;
        margin: auto;
        width: 40%;
        font-family: "Roboto Medium";
    }
    .gain{
        margin: auto;
        display: flex;
    }
    .gain-inner{
        margin : 0 auto;
    }
</style>