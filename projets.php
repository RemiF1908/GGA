<?php include("./inc/blocage.php");
try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<head>
		 <?php include("./inc/head.php"); ?>
          <title>Projets</title>
          <link rel="stylesheet" type="text/css" href="/style/projets.css">
	</head>
	</head>


	<body>
        <?php include("./inc/header.php"); ?>
        <main>
            <h1>Projets</h1>
            <div class="main">
                <div class="form_projet">
                <form action="/php/projets-process" method="post">
                    <textarea type="text" placeholder="Description" id='content' name="content"></textarea>
                    <input class ="button" type="submit">
                </form>
                </div>
            </div>
            <h1>Les projets</h1>
            <div class="tableau">
                <table>
                    <tr><td>Station</td><td>Projet</td><td>Date</td></tr>
                    <?php
                    $projets = $bdd->prepare('SELECT * FROM projets' );
                    $projets->execute(array());
                    while ($donnees = $projets->fetch())
                    {
                        echo '<tr><td class="station">';
                        switch ($donnees['Station']){
                        case 'BGS':
                            echo 'Brégars';
                            break;
                        case 'VLG':
                            echo 'Valrige';
                            break;
                        case 'CPL':
                            echo 'Capleit';
                            break;
                        case 'LAB':
                            echo 'L\'alpe blanche';
                            break;
                        case 'SPB':
                            echo 'Super Besse';
                            break;
                        case 'CVR':
                            echo 'Les ceverts';
                            break;
                        case 'FDR':
                            echo 'Federia';
                            break;
                        case 'PDL':
                            echo 'Pra de l\'eau';
                            break;
                        case 'HTC':
                            echo 'Hautacam';
                            break;
                    }
                    echo '</td>';
                    echo '<td class="content">'.$donnees['Content'].'</td>';
                    echo '<td class="date">'.$donnees['Date'].'</td>';
                    }

                    ?>
                </table>
            </div>
        </main>
        <?php include("./inc/footer.php"); ?>
    </body>
</html>

