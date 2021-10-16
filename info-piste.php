<?php include("./inc/blocage.php"); ?> 

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Grand Groupe Alpin</title>
		<link rel="stylesheet" href=".\style\style.css">
		<link rel="stylesheet" href=".\style\ouverture.css">
		<link rel="stylesheet" media="(max-width: 1000px)"href=".\style\ouverture-tel.css">
		<link href="logo-gga.png" rel="icon" type="image/PNg"  />
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Yanone+Kaffeesatz&display=swap" rel="stylesheet"> 
	</head>

		
	<body>	
<?php include("./inc/header.php"); ?> 
<main>

	<h1>Ouverture des pistes et des remontées :</h1>
	<h2>Ouverture totale du domaine :</h2>
<?php 

	try
		{
		    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}	


$station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\')' );





while ($station_abrv = $station->fetch())

	{

$station_nom=$station_abrv['station_abrv'];
echo '<h2>'.$station_abrv['station'].' :</h2>';
switch ($station_nom) {
	    case 'LAB':
		echo '<img class="logos2" src=./logos/logo-alpe-blanche.png alt="logo">';
		break;

		case 'BGS':
		echo '<img class="logos2" src=./logos/logo-bregars-2.svg alt="logo">';
		break;

		case 'CPL':
		echo '<img class="logos2" src=./logos/logo-capleit.png alt="logo">';
		break;

		case 'VLG':
		echo '<img class="logos2" src=./logos/logo-valrige.svg alt="logo">';
		break;

		case 'CVR':
		echo '<img class="logos2" src=./logos/logo-les-ceverts.png alt="logo">';
		break;
		
		case 'VDA':
		echo '<img class="logos2" src=./logos/logo-val-dargent.png alt="logo">';
		break;
	default:
		echo "Error";
		break;
}


		echo'<div class="station-flex">
		<table class="table-piste-info">
		<tr><th colspan="6">Pistes</th></tr>
		                	<tr><td></td><td></td><td>Altitude Haut</td><td>Altitude Bas</td><td>Longueur</td><td>Largeur</td></tr>';


					
		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'piste\'ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
		$reponse->execute(array('station' => $station_nom));
		





		while ($donnees = $reponse->fetch())

				{	
						
						$nom=$donnees['nom'];
						
						echo'<tr id="'.$nom.'"> 
                            <td class = \'info-couleur\'><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'nom\' >'.$donnees['nom'].'</td>
                            <td class = \'info\'>'.$donnees['Altitude_haut'].'  m</td>
                            <td class = \'info\'>'.$donnees['Altitude_bas'].'  m</td>
                            <td class = \'info\'>'.$donnees['Largeur'].'  m</td>
                            <td class = \'info\'>'.$donnees['Longueur_debit'].'  m</td>
                            
                        </tr>';   
				}
				                      
				        $reponse->closeCursor();

		echo'</table>';		



		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station  AND infra =\'rm\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
		$reponse->execute(array('station' => $station_nom));

		echo'<table class="table-rm-info">
                	<tr><th colspan="5">Remontées</th></tr>
                	<tr><td></td><td></td><td>Altitude Haut</td><td>Altitude Bas</td><td>Débit</td></tr>';

while ($donnees = $reponse->fetch())
{

						echo'<trid="'.$nom.'" > 
                            <td class = \'info-couleur\'><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'nom\'>'.$donnees['nom'].'</td>
                            <td class = \'info\'>'.$donnees['Altitude_haut'].'  m</td>
                            <td class = \'info\'>'.$donnees['Altitude_bas'].'  m</td>
                            <td class = \'info\'>'.$donnees['Longueur_debit'].'  p/H</td>
                            
                        </tr>'; 
                       
}
                        $reponse->closeCursor();

                        echo'</table></div>';	
	}

		$station->closeCursor();



		?>


</main>
</body>
<footer>
       <p class='footer'><ul>
        <li>Contact : <a href='mailto:gga.gski2020@gmail.com'>gga.gski2020@gmail.com</a></li><br>
        <li>Cette station est purement fictive et appartient au jeu <a href='https://g-ski.com/'>G-ski</a>, nous ne pouvons tenus être responsables de tout problème.</li><br>
        <li><a href='cgu.php'>CGU</a></li><br>
        <li><a href='crédit.php'>Crédit photo</a></li>
     </ul></p>        
</footer>
</html>
