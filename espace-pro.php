<?php include("./inc/blocage.php"); ?> 


<!DOCTYPE html>
<html lang="fr">

    <head>
         <?php include("./inc/head.php"); ?>
          <title>Espace Professionel</title>
          <link rel="stylesheet" type="text/css" href="/style/espace-pro.css">

          <script>
    $(document).ready(function() {
        var windowHeight = $(window).height();/* get the browser visible height on screen */
        var headerHeight = $('header').height();/* get the header visible height on screen */
        var bodyHeight = $('main').height();/* get the body visible height on screen */
        var footerHeight = $('footer').height();/* get the header visible height on screen */

        var newBodyHeight = windowHeight - headerHeight-footerHeight;
        if(newBodyHeight > 0 && newBodyHeight > bodyHeight) {
            $('main').height(newBodyHeight);
            $('footer').height(footerHeight);
            $('header').height(headerHeight);

        }
    });
</script>
    </head>


<body>


<?php include("./inc/header.php"); ?>

<main>
 <br><div class='div1'>
 <h1>Espace Pro</h1>
<p>Bienvenue <strong>
      <?php


      $session_pseudo=$_SESSION['pseudo']  ;
       try
        {
            $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }




$reponse = $bdd->prepare('SELECT * FROM membre WHERE pseudo=:pseudo');
$reponse->execute(array('pseudo' => $session_pseudo));
$donnees = $reponse->fetch();
echo $donnees['prenom']." ".$donnees['nom'].',</strong> directeur de la station <strong>'.$donnees['station'].'</strong>';

?></p>

        <div class='div2'>
        <div class="bouton1">
            <a class='lien' href='add-piste'>Ajouter une piste</a>
        </div>
        <div id='bouton-milieu' class="bouton1">
            <a class='lien' href='interface2'>Modifier les pistes</a>
        </div>
        <div class="bouton1">
            <a class='lien' href='interface3'>Modifier les altitudes des pistes</a>
        </div>
            <div class="bouton1">
                <a class='lien' href='projets'>Ajouter un projet</a>
            </div>
    </div>
    </div>
<!-- // TODO rers -->
</main>

<?php include("./inc/footer.php"); ?>
    </body>
</html>
