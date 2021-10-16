<?php include("./inc/blocage.php"); ?> 
<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("./inc/head.php"); ?> 
		<title>Ouverture du domaine</title>
		<link rel="stylesheet" href=".\style\ouverture.css">
		<link rel="stylesheet" media="(max-width: 1000px)"href=".\style\ouverture-tel.css">
		
	</head>

		
	<body>	

<?php include("./inc/header.php"); ?>      



<main>

	<h1>Ouverture des pistes et des remontées :</h1>
	<p>Il sera bientôt possible de connaitre la fréquentation des pistes et des remontées</p>
	<h2>Ouverture globale du domaine :</h2>
<?php 

	try
		{
		    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}	


$station = $bdd->query('SELECT station, station_abrv FROM membre WHERE permission < 3 ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\', \'FDR\', \'HTC\', \'SPB\', \'BBG\' )' );

echo "<p class='nombre-infra'><label>Piste :</label>";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE infra ="piste"');
$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE etat = "ouvert" AND infra ="piste"');
$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .'       ';//ne pas oublier les espaces au début et à la fin pour le style
echo "<label>     Remontées :</label>";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM rm WHERE infra ="rm"');
$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM rm WHERE etat = "ouvert" AND infra ="rm"');
$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' </p>';//ne pas oublier les espaces au début et à la fin pour le style


echo "<p class='nombre-infra'><img class = 'picto' src='./picto/PV.svg' >";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE type ="PV"');
		
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE etat = "ouvert" AND type ="PV"');
		
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' ';//ne pas oublier les espaces au début et à la fin pour le style



echo "<img class = 'picto' src='./picto/PB.svg' >";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE type ="PB"');
		
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE etat = "ouvert" AND type ="PB"');
		
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' ';//ne pas oublier les espaces au début et à la fin pour le style



echo "<img class = 'picto' src='./picto/PR.svg' >";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE type ="PR"');
		
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE etat = "ouvert" AND type ="PR"');
		
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' ';//ne pas oublier les espaces au début et à la fin pour le style



echo "<img class = 'picto' src='./picto/PN.svg' >";
		$nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE type ="PN"');
		
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste WHERE etat = "ouvert" AND type ="PN"');
$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' </p>';//ne pas oublier les espaces au début et à la fin pour le style

echo '<p class="nombre-infra">';


		echo "<img class = 'picto' src='./picto/TK.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (type ="TK1" or type= "TK2")');
$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE  etat = "ouvert" AND (type ="TK1" or type= "TK2")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style


		echo "<img class = 'picto' src='./picto/TSF.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (type ="tsf4" or type= "tsf6")');
$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE  etat = "ouvert" AND (type ="tsf4" or type= "tsf6")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style



		
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE(type ="tsd8" or type= "tsd6" or type="tsd4")');
$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE  etat = "ouvert" AND (type ="tsd8" or type= "tsd6" or type="tsd4")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo "<img class = 'picto' src='./picto/TSD.svg' > ";
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style

		

		
		
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (type ="tcd10" or type= "tcd4" or type="tcd8")');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE etat = "ouvert" AND (type ="tcd10" or type= "tcd4" or type="tcd8")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		
		echo "<img class = 'picto' src='./picto/TCD.svg' > ";
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' </p>';//ne pas oublier les espaces au début et à la fin pour le style
		







while ($station_abrv = $station->fetch())

	{

$station_nom=$station_abrv['station_abrv'];
echo '<h2>'.$station_abrv['station'].' :</h2>';
switch ($station_nom) {
	case 'LAB':
		echo '<img class="logos2" src=./logos/logo_alpe_blanche.svg alt="logo">';
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
		
		case 'PDE':
		echo '<img class="logos2" src=./logos/logo-pdl.svg alt="logo">';
		break;
		case 'FDR':
		echo '<img class="logos2" src=./logos/Federia.png alt="logo">';
		break;

	default:
		echo "Error";
		break;
}

echo '<p class="nombre-infra">Ouverture :</p>';
echo "<p class='nombre-infra'><label>Piste :</label>";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND infra ="piste"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND etat = "ouvert" AND infra ="piste"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .'      ';//ne pas oublier les espaces au début et à la fin pour le style
echo "<label>Remontées :</label>";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND infra ="rm"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND etat = "ouvert" AND infra ="rm"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' </p>';//ne pas oublier les espaces au début et à la fin pour le style





		echo "<p class='nombre-infra'><img class = 'picto' src='./picto/PV.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND type ="PV"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND etat = "ouvert" AND type ="PV"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'] .' ';//ne pas oublier les espaces au début et à la fin pour le style

		echo "<img class = 'picto' src='./picto/PB.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND type ="PB"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND etat = "ouvert" AND type ="PB"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style

		echo "<img class = 'picto' src='./picto/PR.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND type ="PR"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND etat = "ouvert" AND type ="PR"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style

		
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND type ="PN"');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM piste WHERE (station=:station) AND etat = "ouvert" AND type ="PN"');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		if ($don['total'] > 0) {
		echo "<img class = 'picto' src='./picto/PN.svg' >";
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style
		}


		echo '<p class="nombre-infra">';


		echo "<img class = 'picto' src='./picto/TK.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND (type ="TK1" or type= "TK2")');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND etat = "ouvert" AND (type ="TK1" or type= "TK2")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style



		echo "<img class = 'picto' src='./picto/TSF.svg' >";
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND (type ="tsf4" or type= "tsf6")');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND etat = "ouvert" AND (type ="tsf4" or type= "tsf6")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style



		
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND (type ="tsd8" or type= "tsd6" or type="tsd4")');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND etat = "ouvert" AND (type ="tsd8" or type= "tsd6" or type="tsd4")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		if ($don['total'] > 0) {
		echo "<img class = 'picto' src='./picto/TSD.svg' > ";
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style
		}
		

		

		
		
		$nrb_piste = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND (type ="tcd10" or type= "tcd4" or type="tcd8")');
		$nrb_piste->execute(array('station' => $station_nom));
		$don=$nrb_piste->fetch();
		$nrb_piste_ouverte = $bdd->prepare('SELECT COUNT("TSD8") as total FROM rm WHERE (station=:station) AND etat = "ouvert" AND (type ="tcd10" or type= "tcd4" or type="tcd8")');
		$nrb_piste_ouverte->execute(array('station' => $station_nom));
		$piste_ouverte=$nrb_piste_ouverte->fetch();
		if ($don['total'] > 0) {
		echo "<img class = 'picto' src='./picto/TCD.svg' > ";
		echo " ".$piste_ouverte['total'].'/'.$don['total'].' ';//ne pas oublier les espaces au début et à la fin pour le style
		}


		echo "</p>";



		echo'<div class="station-flex">
		<table class="table-piste">
		<tr><th colspan="3">Pistes</th></tr>';

					
		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'piste\'ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
		$reponse->execute(array('station' => $station_nom));
		





		while ($donnees = $reponse->fetch())

				{	
						

						echo'<tr> 
				               <td class = \'couleur\'><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
				               <td class = \'piste\'>'.$donnees['nom'].'</td>
				               <td class = \'ouverture-piste\'><img class = \'picto\'src=\'./picto/'.$donnees['Etat'].'.svg\' ></td>
				            </tr>';  
				}
				                      
				        $reponse->closeCursor();

		echo'</table>';		



		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station  AND infra =\'rm\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
		$reponse->execute(array('station' => $station_nom));

		echo'<table class="table-rm">
                	<tr><th colspan="3">Remontées</th></tr>';

while ($donnees = $reponse->fetch())
{

						echo'<tr > 
                            <td class = \'couleur\'><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'piste\'>'.$donnees['nom'].'</td>
                            <td class = \'ouverture-piste\'><img class = \'picto\'src=\'./picto/'.$donnees['Etat'].'.svg\' ></td>
                        </tr>'; 
                       
}
                        $reponse->closeCursor();

                        echo'</table></div>';	
	}

		$station->closeCursor();



		?>


</main>
</body>
<?php include("./inc/footer.php"); ?>
</html>
