<?php session_start();  

?>


<!DOCTYPE html>
<html lang="fr">
      <head>
          <?php include("/home/gga/www/inc/head.php"); ?>
          <title>CGU</title>
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
      
      <h1>Cgu</h1>
      <ul>
        <li><p class='article'>Article 1 :</p>En entrant sur ce site vous confirmez être conscient qu’il s’agit d’un site fictif pour une station fictive et par conséquent considérer fictif tous les éléments qui s’y trouvent, les stations présentées, leur situation géographique, les commerces et hôtels sont une création fictive comme extension du jeu G-ski a des fins de réalisme.</li>
        <li><p class='article'>Article 2 :</p>Vous vous engagez en continuant votre navigation à considérer comme propriété intellectuelle de ses créateurs le contenu du site et donc à ne pas les réutiliser/ copier sans l’accord écrit et affiché des créateurs susmentionnés</li>
        <li><p class='article'>Article 3 :</p>Vous acceptez en continuant votre navigation d’utiliser ce site a des fins de divertissement uniquement, à ne l’utiliser qu’à cette fin ci, a gardez secret si vous disposez d’identifiants et vous acceptez d’être tenu pour responsable si vous enfreignez les obligations ci-dessus </li>
        <li><p class='article'>Article 4 :</p>Vous acceptez d’essayer de régler les conflits à l’amiable en premier lieu est de contacter la justice dans un second temps </li>
        <li><p class='article'>Article 5 :</p>Vous acceptez enfin de partager vos données surtout jack. </li>

      </ul>



   </main>
  <footer>
       <p class='footer'><ul>
        <li>Contact : <a href='mailto:gga.gski2020@gmail.com'>gga.gski2020@gmail.com</a></li><br>
        <li>Cette station est purement fictive et appartient au jeu <a href='https://g-ski.com/'>G-ski</a>, nous ne pouvons tenus être responsables de tout problème.</li><br>
        <li><a href='cgu.php'>CGU</a></li><br>
        <li><a href='crédit.php'>Crédit photo</a></li>
     </ul></p>        
</footer>
  </body>
</html>

 