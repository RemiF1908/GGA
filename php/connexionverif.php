<?php


function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


try {
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
htmlspecialchars($pseudo = $_POST['pseudo']);

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT ID, mdp, permission, nom, prenom, station_abrv, nbconnexion FROM membre WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify(htmlspecialchars($_POST['mdp']), $resultat['mdp']);

if (!$resultat) {
    echo 'Mauvais identifiant ou mt de passe !';
} else {
    if ($isPasswordCorrect) {


        session_start();

        $_SESSION['perm'] = $resultat['permission'];
        $_SESSION['ID'] = $resultat['ID'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['nom'] = $resultat["nom"];
        $_SESSION['prenom'] = $resultat["prenom"];
        $_SESSION['abrv'] = $resultat["station_abrv"];
        $date = date("Y-m-d H:i:s");


        $req = $bdd->prepare('UPDATE membre SET ip = :ip, date = :date, nbconnexion = :connexion WHERE pseudo=:pseudo');
        $req->execute(array(
            'ip' => getIp(),
            'date' => $date,
            'pseudo' => $pseudo,
            'connexion'=> $resultat['nbconnexion']+1 ));
        echo 'Vous êtes connecté !';
        header('Location: /index');


    } else {
        echo 'Mauvais identifiant ou mot de sse !';
        header('Location: /index');
    }
}


?>
