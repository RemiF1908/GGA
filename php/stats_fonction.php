<?php


function longMax(){

    try {
        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $pistes = $bdd->prepare('SELECT id, nom, MAX(Largeur) FROM piste_rm WHERE infra =\'piste\'');
    $pistes->execute(array());
    while ($piste = $pistes->fetch()) {
        $longMax = $piste['MAX(Largeur)'];
        $nom = $piste["nom"];
    }
    return array($longMax, $nom);
}

function km($station){
    $reponse = $bdd->prepare('SELECT * FROM piste_rm WHERE infra =\'piste\' ');
    $reponse->execute(array('station' => $station));
    $longueur = 0;
    while ($donnees = $reponse->fetch()) {
        $longueur = $longueur + $donnees['Largeur'];
    }
    $rep=$longueur+'km';
    return $rep;
    $reponse->closeCursor();
}