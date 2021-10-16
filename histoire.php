<?php include("./inc/blocage.php"); ?> 

<!DOCTYPE html>
<html lang="fr">

  	<head>
         <?php include("./inc/head.php"); ?> 
          <title>Histoire</title>
        <link rel="icon" type="image/png" href="/logos/logo-gga.png"/>
          <link rel="stylesheet" type="text/css" href="/style/histoire.css">
     	<script>
    $(document).ready(function() {
        var windowHeight = $(window).height();
        var headerHeight = $('header').height();
        var bodyHeight = $('main').height();
        var footerHeight = $('footer').height();

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
    
		<br><br>
    
		<h1>L'histoire du domaine</h1>
		<p id = "histoire">L’idée d’unir les stations du massif ne date pas d’hier, déjà dans les années 60, inspirées par l’ancien grand domaine de l’alpe blanche, celles-ci avaient émis des propositions de ralliement dans un projet alors appelé «  Grand Domaine Blanc » cependant avec le dégel de 1975 et l’isolation de l’alpe blanche qui en était le principal promoteur le projet a été abandonné, ainsi ce n’est qu’en 2016 avec le retour de l’Alpe Blanche sur le marché du ski que l’idée renait, ainsi dans sa dernière année, la SAB initiera un traité de coopération économique entre elle et la station voisine des sommets le 14 octobre 2019, suite a une entrevue entre les directeurs,  par la suite le 29 octobre la station de brégars souhaite ratifier ce traité, qui est revu et corrigé pour former un groupement de station, l’entité n’a pas alors de nom fixe mais suite au décès de  jean Per, fondateur de la première station on la renomme du nom de l’un de ses projets «  le Grand Groupe Alpin » . Par la suite le démarchage des stations voisine des Ceverts et de Capleit  le 5 décembre et le 26 janvier permettent au groupe de devenir un concurrent sérieux pour l’autre groupement de station situés à la frontière franco-suisse :  les portes de l’Europe  déjà beaucoup plus importantes. Ainsi le GGA s’est en a peine 4 mois constitué une solide base, cependant cela ne s’est pas fait sans conséquences, son administration était peu stable et changeante sans vraiment de rigueur et ce n’est qu’avec la fin de la Société de l’alpe blanche jusque-là en charge, connue pour son incapacité de gestion ( en témoigne ses très fortes dettes qui causeront sa faillite le 1er mars ) que le groupe se structurera, non sans avoir laissé échapper de potentiels membres.</p>

	</main>
<?php include("./inc/footer.php"); ?> 
	</body>
</html>