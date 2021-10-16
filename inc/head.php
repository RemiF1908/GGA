<meta charset="utf-8" />
<link rel="stylesheet" href="/style/style.css">
<link rel="stylesheet" href="/inc/header.css">
<link rel="stylesheet" href="/style/connexion.css">
<link rel="icon" type="image/png" href="/logos/logo-gga.png"/>
<link href="logo-gga.png" rel="icon" type="image/png"  />
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:@1&display=swap" rel="stylesheet">
<link rel="stylesheet" media="all and (min-width: 100px) and (max-width: 1000px)" href=".\style\500px.css" />
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" href="/inc/header.css">
<script type="text/javascript">
    function connexion() {
        Swal.fire({
            title: '<p align=center>Se connecter</p>',
            html:'<form action=/php/connexionverif method=\'post\'><input class=\'form\' type=\'text\' name=\'pseudo\' placeholder=\'Pseudo\' id=\'pseudo\'><br><br><input class=\'form\' type=\'password\' placeholder=\'Mot de passe\'name=\'mdp\' id=\'mdp\'><br><br><input class=\'form\' type=\'submit\' value=\'Se connecter\' /> </form>',
            showCloseButton: true,
            showConfirmButton: false,
            allowEnterKey: false,
            heightAuto: false
        })
    }

    function inscription() {
        Swal.fire({
            title: '<p align=center>S\'inscrire</p>',
            html:'<form  action="/php/inscription" method="post"><br><br>' +
                '<input class=\'form\' placeholder="Prénom" type="text" name="prenom" id="prenom" />' +
                '<br><br>' +
                '<input class=\'form\' placeholder="Nom" type="text" name="nom" id="nom" />' +
                '<br><br>' +
                '<input class=\'form\' placeholder="Pseudo" type="text" name="pseudo" id="pseudo" />' +
                '<br><br>' +
                '<input class=\'form\' placeholder="Mot de passe" type="password" name="mdp" id="mdp"/>' +
                '<br><br>' +
                '<input class=\'form\' placeholder="Email" type="email" name="email" id="email" />' +
                '<br><br>' +
                '<input class="form" type="submit" value="Envoyer" />' +
                '</form>',
            showCloseButton: true,
            showConfirmButton: false,
            allowEnterKey: false,
            heightAuto: false
        })
    }

</script>