

<!DOCTYPE html>
<html lang="fr">

	<head>
		<head>
		 <?php include("./inc/head.php"); ?> 
          <title>Modifier les altitudes des pistes</title>
          <link rel="stylesheet" type="text/css" href="/style/interface.css">
	</head>
	</head>

		
	<body>	
<?php include("./inc/header.php"); ?> 
<main>

<?php 

	try
		{
		    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}	


$station = $bdd->query('SELECT station, station_abrv FROM membre WHERE permission < 3 ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\', \'FDR\', \'HTC\', \'SPB\', \'BBG\')' );

while ($station_abrv = $station->fetch())

	{

$station_nom=$station_abrv['station_abrv'];
echo '<h2 id='.$station_nom.'>'.$station_abrv['station'].' :</h2>';




		echo'<div class="station-complet-flex">
        <form action="/php/alti-test" method="post"> 
		<table class="table-piste">
		
		<tr><th colspan="18">Pistes</th></tr>
		<tr><td></td><td></td><td></td><td>Altitude Haut</td><td>Altitude Bas</td><td>Longueur</td><td>Largeur</td></tr>';


					
		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'piste\'ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
		$reponse->execute(array('station' => $station_nom));

		while ($donnees = $reponse->fetch())

				{	
						echo'<tr class=\'clair\'> 
                            <td class = \'couleur\'><input class = "form_id" type="text" value='.$donnees['ID'].' name="ID" id="ID" />
                            </td><td class="case_picto"><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'piste\'>'.$donnees['nom'].'</td>';
                            $id=str_replace(' ', '', 'altitude-haut-'.$donnees['nom']);
						echo'</td><td><input class="debit" type="number" name="'.$id.'" value="'.$donnees['Altitude_haut'].'" id="'.$id.'" /><br /></td>';
                            $id= str_replace(' ', '', 'altitude-bas-'.$donnees['nom']);
                        echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Altitude_bas'].'" id="'.$id.'" /><br /></td>';
                            $id= str_replace(' ', '', 'longueur-'.$donnees['nom']);
                        echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Largeur'].'" id="'.$id.'" /><br /></td>';
                            $id= str_replace(' ', '', 'largeur-'.$donnees['nom']);
                        echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Longueur_debit'].'" id="'.$id.'" /><br /></td>
                            
                        </tr>';
				}
				                      
				        $reponse->closeCursor();
        echo '<td></td><td></td><td></td><td></td><td><input class = "hide"  id="infra" name="infra" value="piste"></td><td><input class = "hide" id="station" name="station" value="'.$station_nom.'"></td><td class = \'ouverture-piste\'><input type="submit" value="Envoyer" /></td>';
		echo'</table></form>';



		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station  AND infra =\'rm\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
		$reponse->execute(array('station' => $station_nom));

        echo'
        <form action="/php/alti-test-rm" method="post"> 
		<table class="table-rm">
		
		<tr><th colspan="18">Rms</th></tr>
		<tr><td></td><td></td><td></td><td>Altitude Haut</td><td>Altitude Bas</td><td>Longueur</td><td>Debit</td></tr>';


while ($donnees = $reponse->fetch())
{



                    echo'<tr class=\'clair\'> 
                                            <td class = \'couleur\'><input class = "form_id" type="text" value='.$donnees['ID'].' name="ID" id="ID" />
                                            </td><td class="case_picto"><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                                            <td class = \'piste\'>'.$donnees['nom'].'</td>';
                    $id=str_replace(' ', '', 'altitude-haut-'.$donnees['nom']);
                    echo'</td><td><input class="debit" type="number" name="'.$id.'" value="'.$donnees['Altitude_haut'].'" id="'.$id.'" /><br /></td>';
                    $id= str_replace(' ', '', 'altitude-bas-'.$donnees['nom']);
                    echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Altitude_bas'].'" id="'.$id.'" /><br /></td>';
                    $id= str_replace(' ', '', 'longueur-'.$donnees['nom']);
                    echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Longueur_debit'].'" id="'.$id.'" /><br /></td>';
                    $id= str_replace(' ', '', 'debit-'.$donnees['nom']);
                    echo '</td><td><input  class="debit"type="number" name="'.$id.'" value="'.$donnees['Largeur'].'" id="'.$id.'" /><br /></td></tr>';
                       
}
                        $reponse->closeCursor();

        echo '<td></td><td></td><td></td><td></td><td><input class="hide" id="infra" name="infra" value="rm"></td><td><input class = "hide" id="station" name="station" value="'.$station_nom.'"></td><td class = \'ouverture-piste\'><input type="submit" value="Envoyer" /></td>';
        echo'</table></form></div>';
	}

		$station->closeCursor();



		?>


</main>
</body>
<?php include("./inc/footer.php"); ?> 

</html>
