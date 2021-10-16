<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("./inc/head.php"); ?>
    <title>Maintenance</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        $(document).ready(function () {

            var windowHeight = $(window).height();/* get the browser visible height on screen */
            var footerHeight = $('footer').height();
            var bodyHeight = $('main').height();/* get the body visible height on screen */

            var newBodyHeight = windowHeight - footerHeight;
            if (newBodyHeight > 0 && newBodyHeight > bodyHeight) {
                $('main').height(newBodyHeight);

            }

        });
        $(document).ready(function () {
            var windowWidth = $(window).width();/* get the browser visible height on screen */
            var headerWidth = $('header').width();/* get the header visible height on screen */
            var bodyWidth = $('main').width();/* get the body visible height on screen */


            $('main').width(windowWidth);

        });
    </script>

</head>


<body>


<main><br>
    <h1>Le site est en maintenance</h1>
    <h2 align="center">Vous pourrez y accéder d'ici 3 semaines </h2>
    <p onclick="Swal.fire({
                    title: '<p align=center>Se connecter</p>',
                    html:'<form action=/php/connexionverif method=\'post\'><input class=\'form\' type=\'text\' name=\'pseudo\' placeholder=\'Pseudo\' id=\'pseudo\'><br><br><input class=\'form\' type=\'password\' placeholder=\'Mot de passe\'name=\'mdp\' id=\'mdp\'><br><br><input class=\'form\' type=\'submit\' value=\'Se connecter\' /> </form>',                    
                    showCloseButton: true,
                    showConfirmButton: false,
                    allowEnterKey: false,
                    heightAuto: false
                })" align="center"><a align="center">Accedez à l'espace pro</a></p>

    <form action="/php/connexionverif" method='post'><input class='form' type='text' name='pseudo' placeholder='Pseudo' id='pseudo'><br><br><input class='form' type='password' placeholder='Mot de passe'name='mdp' id='mdp'><br><br><input class='form' type='submit' value='Se connecter' /> </form>
</main>

<?php include("./inc/footer.php"); ?>
</body>
</html>

