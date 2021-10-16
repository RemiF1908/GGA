<?php include("./inc/blocage.php"); ?> 
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
echo '<h2>'.$station_abrv['station'].' :</h2>';




		echo'<div class="station-flex">
		<table class="table-piste-2">
		<tr><th colspan="9">Pistes</th></tr>';

					
		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station AND infra =\'piste\'ORDER BY FIELD (type, \'PV\', \'PB\',\'PR\',\'PN\'), nom' );
		$reponse->execute(array('station' => $station_nom));
		





		while ($donnees = $reponse->fetch())

				{	
						

						echo'<tr class=\'clair\'> <form action="/php/edit_piste" method="post"> 
                            <td class = \'couleur\'><input class = "form_id" type="text" value='.$donnees['ID'].' name="ID" id="ID" /></td><td class="case_picto"><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'piste\'>'.$donnees['nom'].'</td><td><input  type="text" name="nom" placeholder="Nom" id="nom" /><br /></td>
                            <td><input type="checkbox" name="supprimer" value ="supprimer" id="supprimer" /><label for="supprimer"><img class = "picto" src = "./picto/supprimer.png"></label></td>
                            <td><select name="Type"  id="Type">
                                    <option>Choisir un type</option>
                                        <option>PV</option>
                                        <option>PB</option> 
                                        <option>PR</option>
                                        <option>PN</option>
                                    </select><br /></td>
                            <td><select name="Etat"  id="Etat">
                                    <option>Choisir un etat</option>
                                        <option>ouvert</option>
                                        <option>ferme</option> 
                                        <option>construction</option>
                            </select><br /></td>
                            <td class = \'ouverture-piste\'><input type="submit" value="Envoyer" /></td>
                        </form></tr>'; 
				}
				                      
				        $reponse->closeCursor();

		echo'</table>';		



		$reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE station=:station  AND infra =\'rm\' ORDER BY FIELD (type, \'TK1\', \'TK2\',\'TSF4\',\'TSF6\',\'TSD4\',\'TSD6\',\'TSD8\',\'TSD8\',\'TCD4\',\'TCD6\',\'TCD8\',\'TCD10\'), nom');
		$reponse->execute(array('station' => $station_nom));

		echo'<table class="table-rm-2">
                	<tr><th colspan="9">Remontées</th></tr>';

while ($donnees = $reponse->fetch())
{

						echo'<tr><form action="/php/edit_piste" method="post">  
                            <td class = \'couleur\'><input class = "form_id" type="text" value='.$donnees['ID'].' name="ID" id="ID" /></td><td class="case_picto"><img class = \'picto\' src=\'./picto/'.$donnees['type'].'.svg\' ></td>
                            <td class = \'piste\'>'.$donnees['nom'].'</td><td><input  type="text" name="nom" placeholder="Nom" id="nom" /><br /></td>
                            <td><input type="checkbox" name="supprimer" value ="supprimer" id="supprimer" /><label for="supprimer"><img class = "picto" src = "./picto/supprimer.png"></label></td>
                            <td>  <select name="Type"  id="Type">
<option>Choisir un type</option>
        <option>TK1</option>
        <option>TK2 </option> 
        <option>TSF2</option>
        <option>TSF3 </option> 
        <option>TSF4</option>
        <option>TSF6</option>
        <option>TSD4</option>
        <option>TSD6</option> 
        <option>TSD8</option>
        <option>TCD4</option>
        <option>TCD6</option>
        <option>TCD8</option>
        <option>TCD10</option>
    </select><br /></td>
                            <td><select name="Etat"  id="Etat">
                            <option>Choisir un etat</option>
                                <option>ouvert</option>
                                <option>ferme</option> 
                                <option>construction</option>
                            </select><br /></td>
                            <td class = \'ouverture-piste\'><input type="submit" value="Envoyer" /></td>
                        </form></tr>'; 
                       
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
