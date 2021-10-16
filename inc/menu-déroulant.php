<?php include("blocage.php") ?>
<!DOCTYPE html>
<html>


<style type="text/css">


*{
    margin: 0px;
    padding: 0px;
    font-family: Avenir, sans-serif;
}

nav{
    width: 100%;
    display: flex;
    background-color: white;
    position: sticky;
    top: 0px;
}
ul{
    width: 70%;
    margin-bottom: auto;
    margin-top: auto;

}
nav ul{
    list-style-type: none;
}

nav ul li{
    float: left;
    width: 20%;
    text-align: center;
    position: relative;
}

nav ul::after{
    content: "";
    display: table;
    clear: both;
}

nav .lien{
    display: block;
    text-decoration: none;
    color: black;
    border-bottom: 2px solid transparent;
    padding: 10px 0px;
}

nav .lien:hover{
    color: #2ccdd5;
    border-bottom: 2px solid #00c3ff;
}

.sous{
    display: none;
    box-shadow: 0px 1px 2px #CCC;
    background-color: white;
    position: absolute;
    width: 100%;
    z-index: 1000;
}
nav > ul li:hover .sous{
    display: block;
}
.sous li{
    float: none;
    width: 100%;
    text-align: left;
}
.sous .lien{
    padding: 10px;
    border-bottom: none;
}
.sous .lien:hover{
    border-bottom: none;
    background-color: RGBa(200,200,200,0.1);
}

.logo-insta-lien{
    text-align: right;

    position: relative;
    display: flex;
        justify-content: right;
    margin-top:auto;
    margin-bottom:  auto;
    width: 2%;
    height: auto;
}
.logo-insta{
    height: 100%;
    width: 100%;
}
.conteneur{
  margin: 50px 20px;
  height: 1500px;
}
.logo-gga{
    width: 5%;
    margin-right: 1%;
}
.block{
    display: block;
    width: 100%;
    height: 100%;
}
.logo{
    width: 100%;
    height: auto;
}
</style>
<header>
<nav>
    <div class='logo-gga'><a class='block' href='/index'><img class ='logo' src = "/logos/logo-gga.png" alt ='logo'></a></div>
  <ul>
    <li class="deroulant"><a class='lien' href="#">Domaine</a>
      <ul class="sous">
        <li><a class='lien' href="#">Cours HTML et CSS</a></li>
        <li><a class='lien' href="#">Cours JavaScript</a></li>
        <li><a class='lien' href="#">Cours PHP et MySQL</a></li>
      </ul>
    </li>
    <li class="deroulant"><a class='lien' href="#">Station</a>
      <ul class="sous">
        <li><a class='lien' href="#">Cours HTML et CSS</a></li>
        <li><a class='lien' href="#">Cours JavaScript</a></li>
        <li><a class='lien' href="#">Cours PHP et MySQL</a></li>
      </ul>
    </li>
    <li class="deroulant"><a class='lien' href="#">Autre</a>
      <ul class="sous">
        <li><a class='lien' href="#">CSS display</a></li>
        <li><a class='lien' href="#">CSS position</a></li>
        <li><a class='lien' href="#">CSS float</a></li>
      </ul>
    </li>
    <li><a class='lien' href="#">Contact</a></li>
    <li><a class='lien' href="#">A propos</a></li>
  </ul>
  <?php 
         if (isset($_SESSION['ID']) AND isset($_SESSION['pseudo']))
          {
          echo '<a class = \'bouton\' href="/php/deconnexion.php">Se déconnecter<br></a>'; }?>   

          
      <a class='logo-insta-lien' href='https://www.instagram.com/grand_groupe_alpin/'><img class='logo-insta' src="/logos/logo-insta.svg"></a>
   
</nav>
</header>
<div class="conteneur">
  <p>Du contenu sous le menu</p>
</div>
</html>