<?php include("./inc/blocage.php"); ?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Réservation</title>
			<?php include("./inc/head.php"); ?>
			<link rel="stylesheet" type="text/css" href=".\style\reservation.css">
			<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

		</head>
		<body>
			<?php include("./inc/header.php"); ?>
			<main>
				<br>
				<script> const flatpickr = require("flatpickr");
 const fp = flatpickr("#calendar", {altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",}); // flatpickr</script>
			<input onclick="function(evt) {
  evt.which === 1 && handler(evt);
}" class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." readonly="readonly">
				<div class="avie">
				<form  action="/php/avis" method="post" class='avisPost'>
					<input class='titre' placeholder="Titre" type="text" name="titre" />
					<textarea class='content' placeholder="Avis" type="text" name="content" ></textarea>
					<input class='hide' type="text" name="id_hotel" value="Odalys"/>

					<input class="send" type="submit" value="Envoyer" />
				</form>

				<?php
try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
		$avis = $bdd->prepare('SELECT * FROM Avis WHERE Id_hotel=:Id_hotel');
		$avis->execute(array('Id_hotel' => "Odalys"));

		while ($donnees = $avis->fetch()){
			echo "<div class='avis'>";

			$infoMembre = $bdd->prepare('SELECT * FROM membre WHERE ID=:ID');
			$infoMembre->execute(array('ID' => $donnees['Id_user'] ));
			$res=$infoMembre->fetch();
			echo "<p>".$res['prenom']." ".$res['nom']."</p>";

			echo "<div class='contenu'><strong>".$donnees['Titre']."</strong>";
			echo "<p>".$donnees['Content']."</p>";
			echo "</div></div>";
		}
						        $avis->closeCursor();

		 ?>

			</div>

			</main>
			<?php include("./inc/footer.php"); ?>
		</body>
	</html>
