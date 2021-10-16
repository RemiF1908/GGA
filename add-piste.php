<?php include("./inc/blocage.php");
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("./inc/head.php"); ?>
    <title>Ajouter des pistes</title>
    <link rel="stylesheet" type="text/css" href='./style/add-piste.css'>
</head>


<body>


<?php include("./inc/header.php"); ?>


<main>
    <h1>Ajouter une piste</h1>

    <?php $types = array('PV', 'PB', 'PR', 'PN', 'TK1', 'TK2', 'TSF2', 'TSF4', 'TSF6', 'TSD4', 'TSD6', 'TSD8', 'TCD4', 'TCD6', 'TCD8', 'TCD10', 'TMX6/8', 'TMX8/10'); ?>

    <form method="post" action="./php/interface">

        <label for="nom">Nom</label> : <input type="text" name="nom" id="nom"/><br/>
        <label for="type">Type</label> : <select name="type" id="type">
            <?php
            if (isset($_SESSION['choix-type'])) {
                echo '<option>' . $_SESSION['choix-type'] . '</option>';
            }

            foreach ($types as $type) {
                echo '<option>' . $type . '</option>';
            }
            ?>
        </select>

        <br>
        <label for="Etat">Etat</label> :
        <input type="radio" name="Etat" value="ouvert" checked id="Etat"><label for="ouvert">Ouvert</label>
        <input type="radio" name="Etat" value="ferme" id="Etat"><label for="ferme">Fermé</label>
        <input type="radio" name="Etat" value="construction" id="Etat"><label for="construction">En construction</label><br>

        <label for="haut">Altitude haut</label> : <input type="text" name="haut" id="haut"><br>
        <label for="bas">Altitude bas</label> : <input type="text" name="bas" id="bas"><br>
        <label for="Longueur">Longueur</label> : <input type="text" name="Longueur" id="Longueur"><br>
        <label for="Largeur/débit">Largeur/débit</label> : <input type="text" name="Largeur/débit" id="Largeur/débit"><br>

        <label for="infra">Type d'infrastructure</label> : <input type="radio" name="infra" value="piste" id="infra"
            <?php
            if ($_SESSION['choix-infra'] == 'piste') {
                echo 'checked';
            }
            ?>/>
        <label for="piste">Piste</label>

        <input type="radio" name="infra" value="rm" id="infra"
            <?php
            if ($_SESSION['choix-infra'] == 'rm') {
                echo 'checked';
            }
            ?>/>
        <label for="rm">Rm</label>

        <input type="submit" value="Envoyer"/>
    </form>
</main>


<?php include("./inc/footer.php");
echo $_SESSION['choix-infra'] ?>


</body>
</html>






