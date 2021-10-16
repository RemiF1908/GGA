<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8" />
        <title>Grand Groupe Alpin</title>
        <link rel="stylesheet" href="header.css">
     	<link href="logo-gga.png" rel="icon" type="image/png"  />
     	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Yanone+Kaffeesatz&display=swap" rel="stylesheet"> 
     	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
     	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 
     	<link href="https://fonts.googleapis.com/css2?family=Kanit:@1&display=swap" rel="stylesheet"> 
    </head>
	<body>
		<header>
			<nav id = 'nav1'>
				<div class='flex-header'>
					<a class = 'bouton-gauche' href=index>Accueil</a>
					<a class = 'bouton-gauche' href=ouverture>Ouverture du domaine</a>
					<a class = 'bouton-gauche' href=tarifs>Tarif</a>
					<a class = 'bouton-gauche' href=restaurants>Les restaurants</a>
				</div>
				<a  href='/index' class = 'flex-header' id='lien-logo'><img class ='logo' src = "logo-gga.png" alt ='logo'></a>
				<div class='flex-header'>
					<a class = 'bouton-droite' href=logements>Les logements</a>
					<a class = 'bouton-droite' href=transports>Les transports</a>
					<a class = 'bouton-droite' href=histoire>L'histoire du domaine</a>
					<a class = 'bouton-droite' href=connexion>Espace ro</a>
				</div> 
        		<?php 
					if (isset($_SESSION['ID']) AND isset($_SESSION['pseudo']))
						{
            				echo '<a class = \'bouton\' href=".\php\deconnexion.php">Se déconnecter<br></a>'; 
            			}
            	?>
			</nav><br>
			<label>Le Grand Groupe Alpin</label>	
		</header>
	</body>
</html>

