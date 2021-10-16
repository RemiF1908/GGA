<?php session_start();  ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Grand Groupe Alpin</title>
        <link rel="stylesheet" href=".\style\style.css">
        <link href="logo-gga.png" rel="icon" type="image/png"  />
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Yanone+Kaffeesatz&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Kanit:@1&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" media="all and (min-width: 100px) and (max-width: 1000px)" href="500px.css" />
        <link rel="stylesheet" href=".\style\connexion.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
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


          

<?php 


if (isset($_SESSION['ID']) AND isset($_SESSION['pseudo']))
{
 
        header('Location: espace-pro');


}

?>
<main>
        <br><h1>Connectez vous :</h1>
        <form  action = /php/connexionverif method="post">
            <p> 
            <div class="flex"><div class="flex-input">
                <label for="pseudo">Pseudo :</label><input type="text" name="pseudo" id="pseudo"><br>
                <label for="message">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp"><br><br>
                <input type="submit" value="Envoyer" />
            </div></div>
            </p>
        </form>   
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






