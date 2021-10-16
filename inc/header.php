<?php session_start() ?>
<!DOCTYPE html>

<html lang="fr">


<body>

<header class='header-pc'>
    <nav>
        <div class='logo-gga'><a class='block' href='/index'><img class='logo' src="/logos/logo-gga.png" alt='logo'></a>
        </div>
        <ul>
            <li><a class='lien' href="/index">Accueil</a></li>

            <li class="deroulant"><a class='lien' href="#">Domaine</a>
                <ul class="sous">
                    <li><a class='lien' href="/ouverture">Ouverture du domaine</a></li>
                    <li><a class='lien' href="/plan-des-pistes">Plans des pistes</a></li>
                    <li><a class='lien' href="/tarifs">Les forfaits</a></li>
                </ul>
            </li>

            <li class="deroulant"><a class='lien' href="#">Station</a>
                <ul class="sous">
                    <li><a class='lien' href="/logements">Logements</a></li>
                    <li><a class='lien' href="/restaurants">Restaurants</a></li>
                    <li><a class='lien' href="/transports">Les transports</a></li>
                </ul>
            </li>
            <li class="deroulant"><a class='lien' href="#">Espace Pro</a>
                <ul class="sous">
                    <li><a class='lien' href="/add-piste">Ajouter une piste</a></li>
                    <li><a class='lien' href="/interface2">Modidier l'état des pistes</a></li>
                    <li><a class='lien' href="/interface3">Modifier l'altitude des pistes</a></li>
                    <li><a class='lien' href="/projets">Ajouter un projet</a></li>
                    <li><a class='lien' href="/stats">Les stats !</a></li>
                    <li><a class='lien' href="/graph">Les comptas</a></li>
                    <li><a class='lien' href="/classement">Le classement</a></li>
                    <li><a class='lien' href="/meteo">La météo</a></li>

                </ul>
            </li>


            <?php //echo $_SESSION['perm'] ?>
        </ul>
        <div class='blanc'></div>
        <div class='connexion'>
            <?php
            if (isset($_SESSION['ID']) and isset($_SESSION['pseudo'])) {
                echo '<a class = \'bouton\' ></a>';
                echo '<a class = \'bouton\' href="/php/deconnexion.php">Se déconnecter<br></a>';
            } else {
                echo '<a class = \'bouton\' onclick="inscription()">S\'inscrire<br></a>';
                echo '<a class = \'bouton\' onclick="connexion()" >Se connecter<br></a>';
            }

            ?>

        </div>
        <div class='droite'>
            <a class='logo-insta-lien' href='https://www.instagram.com/grand_groupe_alpin/'><img class='logo-insta'
                                                                                                 src="/logos/logo-insta.svg"></a>
        </div>
    </nav>
</header>


<header id='header-mobile'>

    <div class='logo-gga-croix'>
        <div class='blanc'></div>
        <div class='logo-gga'><a class='block' href='/index'><img class='logo' src="logos/logo-gga.png" alt='logo'></a>
        </div>
        <img class='croix' src="/picto/croix.svg" onclick=" var headerNormal = document.getElementById('mobi-normal');
         var headerDeploi = document.getElementById('header-mobile');
 headerNormal.style.display = 'flex'; headerDeploi.style.display = 'none';"></div>
    <nav id='nav1'>
        <a class='bouton' href=/index>Accueil</a>
        <a class='bouton' href=/ouverture>Ouverture du domaine</a>
        <a class='bouton' href=/plan-des-pistes>Plan des pistes</a>
        <a class='bouton' href=/tarifs>Tarifs</a>
        <a class='bouton' href=/restaurants>Les restaurants</a>
        <a class='bouton' href=/logements>Les logements</a>
        <a class='bouton' href=/transports>Les transports</a>
        <a class='bouton' href=/histoire>L'histoire du domaine</a>
        <a class='bouton' href=/connexion>Espace Pro</a>
        <?php
        if (isset($_SESSION['ID']) and isset($_SESSION['pseudo'])) {
            echo '<a class = \'bouton\' href="/php/deconnexion.php">Se déconnecter<br></a>';
        } ?>

    </nav>
    <a class='logo-insta-lien' href='https://www.instagram.com/grand_groupe_alpin/'><img class='logo-insta'
                                                                                         src="/logos/logo-insta.svg"></a>
</header>

<header id="mobi-normal">
    <div class='logo-gga-croix'><img class='croix' src="/picto/3barres.svg" onclick=" var headerNormal = document.getElementById('mobi-normal');
         var headerDeploi = document.getElementById('header-mobile');
 headerNormal.style.display = 'none'; headerDeploi.style.display = 'flex';   document.getElementById('header-mobile').className = 'transition';">
        <div class='logo-gga'><a class='block' href='/index'><img class='logo' src="/logos/logo-gga.png" alt='logo'></a>
        </div>
        <div class='blanc'></div>
    </div>

</header>


</body>
</html>

