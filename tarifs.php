
<!DOCTYPE html>
<html lang="fr">

  	<head>
         <?php include("./inc/head.php"); ?> 
          <title>Les tarifs</title>
          <link rel="stylesheet" type="text/css" href="/style/tarifs.css">
    </head>

	<body>
<?php include("./inc/header.php"); ?>
<main>

		<h1> Voici les différents tarifs <br>du pass Grand'Alpe :</h1>
		<p id = 'grandalpe'>Le pass Grand'Alpe permet de skier sur les 5 stations du domaine<br>Il sera bientôt possible de reserver les forfait en ligne</p>
		<div class='content'>
			<img id ='img1' src="/image/tarif.jpg" alt = 'Photo du domaine'>
			<table>
				<tr>
					<td id='empty'></td>
					<td class = 'gris'>Adulte</td>
					<td class = 'gris'>Réduit*</td>
					<td class = 'gris'>Etudiants</td>
					<td class = 'gris'>Famille**</td>
				</tr>
				<tr>
					<td class = 'gris'>Jour</td>
					<td>35€</td>
					<td>29€</td>
					<td>30€</td>
					<td>27,50€</td>
				</tr>
					<tr>
					<td class = 'gris'>Semaine</td>
					<td>195€</td>
					<td>160€</td>
					<td>170€</td>
					<td>155€</td>
				</tr>
				<tr>
					<td class = 'gris'>Saison</td>
					<td>360€</td>
					<td>310€</td>
					<td>330€</td>
					<td>300€</td>
				</tr>
			</table>
		</div>
		<p id='infotarif'>Les forfaits peuvent être achetés dans les différents points de ventes à côté des remontées mécaniques du front de neige.</p>

		<p id = 'remboursé'>*Enfant de moins de 15 ans et personnes âgées de plus de 70ans.<br>**Famille de plus de 5 personnes.<br>Toutes les réductions doivent être prouver à l'aide d'une pièce d'identité.<br>Aucun forfait n'est remboursé mis à part météo exceptionnelle, où la fermeture du domaine est obligée.</p>
	</main>
<?php include("./inc/footer.php"); ?>
	</body>
</html>