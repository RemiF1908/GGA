<?php include("./inc/blocage.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" type="text/css" href="/style/500px.css"/>
    <?php include("./inc/head.php"); ?>

    <title>Grand Groupe Alpin</title>
    <link rel="stylesheet" type="text/css" href="/dist/loading-bar.css"/>
    <script type="text/javascript" src="/dist/loading-bar.js"></script>
    <script>


        $(document).ready(function () {

            var windowHeight = $(window).height();/* get the browser visible height on screen */
            var headerHeight = $('header').height();/* get the header visible height on screen */
            var logoHeight = $('#logos').height();/* get the header visible height on screen */
            var bodyHeight = $('#image-defil').height();/* get the body visible height on screen */
            if (windowHeight < 1080) {
                var newBodyHeight = windowHeight - headerHeight;
                console.log('4');
                if (newBodyHeight > 0 && newBodyHeight > bodyHeight) {
                    $('#image-defil').height(newBodyHeight);

                }
            } else {
                var newBodyHeight2 = windowHeight - headerHeight - logoHeight;
                $('#image-defil').height(newBodyHeight2);
            }

        });
        $(document).ready(function () {
            var windowWidth = $(window).width();/* get the browser visible height on screen */
            var headerWidth = $('header').width();/* get the header visible height on screen */
            var bodyWidth = $('#image-defil').width();/* get the body visible height on screen */


            $('#image-defil').width(windowWidth);

        });
    </script>

</head>


<body>

<?php include("./inc/header.php"); ?>

<main>
    <div id="image-defil">
        <div class='overlay'>
            <div class='centrage-texte'>
                <div id='text-prez2'>
                    <h1 class='title1'>Le Grand Groupe Alpin</h1>
                    <div class='texte-prez'>
                        <p class='prez'>Le grand groupe alpin est un domaine skiable regroupant les 5 stations suivantes
                            : L'alpe Blanche, Les Sommets, Brégars, Les Ceverts et CapLeit.Avec plus de 100 km de pistes
                            et plus de 70 remontées mécaniques, le domaine a su s'imposer comme une référence dans
                            l'univers du ski.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="logos">
        <img class='logos' src=./logos/logolab2.svg alt='logo'>
        <img class='logos' src=./logos/logo-bregars-2.svg alt='logo'>
        <img class='logos' src='./logos/logo-les-ceverts.png' alt='logo'>
        <img class='logos' src='./logos/logo-valrige.svg' alt='logo'>
        <img class='logos' src='./logos/logo-capleit.png' alt='logo'>
    </div>

    <div id='prez-station'>


        <h2>L'alpe Blanche :</h2>
        <div class='prez-station'>
            <div class='text-prez-station-gauche'>
                <p>L'alpe Blanche est une station située dans la vallée des 3 alpes au pied du sommet éponyme. Elle est
                    adaptée à tous les sports et à tous les pratiquants, été comme hiver, avec 30 km de pistes l'alpe
                    blanche s'impose comme une station importante dans le paysage régional.</p>
                <div class='centrage-barre'>
                    <?php

                    try {
                        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }


                    $station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\')');

                    echo "<div class='flex-barre'><p class='nombre-infra'><img class='picto' src='/picto/piste.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="piste"AND station="LAB"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert"AND station="LAB" AND infra ="piste"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    echo "<p class='nombre-infra' id='rm'><label><img class='picto' src='/picto/rm.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="rm"AND station="LAB"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="LAB"AND infra ="rm"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    ?>
                </div>
            </div>
            <img class='ilustration-droite' src='/image/ilustration/ilustration-alpeblanche.jpg'
                 alt='Ilustration station'>
        </div>


        <h2>Valrige :</h2>
        <div class='prez-station2'>
            <img class='ilustration-gauche' src='/image/ilustration/ilustration-sommets.JPG' alt='Ilustration station'>
            <div class='text-prez-station-droite'>
                <p>La station de Valrige, est une station familiale très appréciée par les skieurs de par sa diversité
                    de pistes mais aussi son très bon rapport qualité/prix. Elle se démarque aussi par un accès facilité
                    à la station par de nombreux axes routiers.</p>
                <div class='centrage-barre'>
                    <?php

                    try {
                        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }


                    $station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\')');

                    echo "<div class='flex-barre'><p class='nombre-infra'><label><img class='picto' src='/picto/piste.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="piste"AND station="VLG" ');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="VLG" AND infra ="piste"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    echo "<p class='nombre-infra' id='rm'><label><img class='picto' src='/picto/rm.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="rm" AND station="VLG" ');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="VLG" AND infra ="rm"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    ?>
                </div>
            </div>
        </div>


        <h2>Brégars :</h2>
        <div class='prez-station'>
            <div class='text-prez-station-gauche'>
                <p>Bregars est une station orientée nature, son mot d'ordre est l'écologie, elle plaira aux familles qui
                    cherchent un environnement calme et aux passionnés qui cherchent un environnement naturel. La
                    station à su garder un charme authentique, mais dispose de tous les commerces nécéssaires. La
                    station est un pillier dans le ski freeride ainsi que dans le ski freestyle.</p>
                <div class='centrage-barre'>
                    <?php

                    try {
                        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }


                    $station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\')');

                    echo "<div class='flex-barre'><p class='nombre-infra'><label><img class='picto' src='/picto/piste.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="piste"AND station="BGS"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND infra ="piste"AND station="BGS"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    echo "<p class='nombre-infra' id='rm'><label><img class='picto' src='/picto/rm.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="rm"AND station="BGS"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="BGS" AND infra ="rm"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    ?>
                </div>
            </div>

            <img class='ilustration-droite' src='/image/ilustration/ilustration-bregars.jpg' alt='Ilustration station'>

        </div>

        <h2>Les Ceverts :</h2>
        <div class='prez-station2'>
            <img class='ilustration-gauche' src='/image/ilustration/ilustration-ceverts.jpg' alt='Ilustration station'>
            <div class='text-prez-station-droite'>
                <p>Niché au fond de la vallée du Grand Aiglet et au cœur d’une zone de nature préservée, le domaine
                    skiable des Ceverts offre un panel d’expérience diversifié pour tous les niveaux. Le côté chaleureux
                    et convivial d’une station avant tout familiale couplée à un paysage d’une rare beauté rendra votre
                    séjour inoubliable.</p>
                <div class='centrage-barre'>
                    <?php

                    try {
                        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }


                    $station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\')');

                    echo "<div class='flex-barre'><p class='nombre-infra'><label><img class='picto' src='/picto/piste.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="piste"AND station="CVR" ');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="CVR" AND infra ="piste"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    echo "<p class='nombre-infra' id='rm'><label><img class='picto' src='/picto/rm.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE infra ="rm"AND station="CVR"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="CVR" AND infra ="rm"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    ?>
                </div>
            </div>
        </div>

        <h2>CapLeit :</h2>
        <div class='prez-station'>
            <div class='text-prez-station-gauche'>
                <p>Avec plus de 75% du domaine situé au dessus de 2000 mètres d'altitude, la station-village de CapLeit
                    vous emmène en haut des pistes en tout confort en un temps record grâce aux remontées mécaniques
                    premiums de dernière génération. De plus, la station possède des pistes qui raviront les skieurs
                    avancés avec au total 9 pistes bleues et rouge pour 13 pistes. Cela constitue environ 20km de pistes
                    !</p>
                <div class='centrage-barre'>
                    <?php

                    try {
                        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    } catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }


                    $station = $bdd->query('SELECT station, station_abrv FROM membre ORDER BY FIELD (station_abrv, \'LAB\', \'BGS\',\'CPL\',\'VLG\',\'CVR\',\'PDE\')');

                    echo "<div class='flex-barre'><p class='nombre-infra'><label><img class='picto' src='/picto/piste.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE  infra ="piste"AND station="CPL"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE  etat = "ouvert" AND station="CPL"AND infra ="piste"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    echo "<p class='nombre-infra' id='rm'><label><img class='picto' src='/picto/rm.svg'></label>";
                    $nrb_piste = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE  infra ="rm"AND station="CPL"');

                    $don = $nrb_piste->fetch();
                    $nrb_piste_ouverte = $bdd->query('SELECT COUNT("TSD8") as total FROM piste_rm WHERE etat = "ouvert" AND station="CPL" AND infra ="rm"');

                    $piste_ouverte = $nrb_piste_ouverte->fetch();
                    $pourcentage = $piste_ouverte['total'] * 100 / $don['total'];
                    $pourcentage_arrondi = round($pourcentage, 0);
                    echo " " . "<div
  class='ldBar label-center' stroke-width: 10
  data-value='" . $pourcentage_arrondi . "'
  data-preset='circle'
></div></div> " . ' ';//ne pas oublier les espaces au début et à la fin pour le style
                    ?>
                </div>
            </div>
            <img class='ilustration-droite' src='/image/ilustration/ilustration-capleit.jpg' alt='Ilustration station'>
        </div>


    </div>
    </div>
    </div>

    </div>

</main>

<?php include("./inc/footer.php"); ?>
</body>
</html>

