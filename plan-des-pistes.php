<?php include("./inc/blocage.php"); ?> 

<!DOCTYPE html>
<html lang="fr">
      <head>
          <?php include("./inc/head.php"); ?> 
          <title>Plans des pistes</title>
          <link rel="stylesheet" type="text/css" href="/style/pdp.css">
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
    <main><br><br><br>
<h1>Plan des pistes :</h1>
<div class='flex'>
  <div class='station'> 
  <h3>L'alpe blanche</h3>   
  <a href="/plans-des-pistes/pdp-l'alpe-blanche"><img class='apercue' src='.\pdp\pdp-lab.png'></a>
  </div>
  <div class='station'>  
  <h3>Les sommets</h3> 
  <a href="/plans-des-pistes/pdp-sommets"><img class='apercue' src='.\pdp\pdp-lsm.png'></a> 
  </div>
  <div class='station'>
  <h3>Brégars</h3>
  <a href="/plans-des-pistes/pdp-bregars"><img class='apercue' src='.\pdp\pdp-bgs.png'></a>    
  </div>
  <div class='station'>  
  <h3>Les ceverts</h3> 
  <a href="/plans-des-pistes/pdp-ceverts"><img class='apercue' src='.\pdp\pdp-cvr.png'></a> 
  </div>
  <div class='station'>
  <h3>CapLeit</h3>    
  <a href="/plans-des-pistes/pdp-capleit"><img class='apercue' src='.\pdp\pdp-cpl.png'></a>
  </div>
</div>  
<p class='clique'>Cliquer sur les plan des pistes pour avoir la version interactive</p>
    </main>
<?php include("./inc/footer.php"); ?>
  </body>
</html>

 