<?php include("./inc/blocage.php"); ?> 
<!DOCTYPE html>
	<html lang="fr">
		<head>
			<?php include("./inc/head.php") ?>
			<title>Médiathèque</title>
		</head>
		<body>
			<?php include("./inc/header.php") ?>
			<main>
				<form method="POST" action="/php/upload.php" enctype="multipart/form-data">
     				<input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
     				Fichier : <input type="file" name="avatar">
     				<input type="submit" name="envoyer" value="Envoyer le fichier">
				</form>
			</main>


		</body>
	</html>